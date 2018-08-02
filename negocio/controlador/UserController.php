<?php

namespace negocio\controlador;

use Exception;
use negocio\excepcion\PlanAException;
use negocio\generico\GenericController;
use negocio\util\Validation;
use persistencia\dao\AssistanceDAO;
use persistencia\dao\GradeDAO;
use persistencia\dao\SubjectDAO;
use persistencia\dao\UserDAO;
use persistencia\vo\ActivityVO;
use persistencia\vo\GradeVO;
use persistencia\vo\SubjectVO;
use persistencia\vo\UserVO;
use const FOLDER_MAIN;
use const MAIN_PATH;

class UserController extends GenericController {

    private $userDAO;
    private $subjectDAO;
    private $GradeDAO;
    private $activityDAO;
//    private $assistanceDAO;
    
    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->userDAO = new UserDAO($cnn);
        $this->subjectDAO = new SubjectDAO($cnn);
        $this->GradeDAO = new GradeDAO($cnn);
//        $this->assistanceDAO = new AssistanceDAO($cnn);
    }

    public function login() {
        $document = $_POST['use_document'];
        $password = $_POST['use_password'];
        $autenticar = $this->userDAO->authenticate($document, $password);
        if (is_null($autenticar)) {
            header('location: ' . MAIN_PATH);
            return;
        }
        $_SESSION['user'] = $autenticar;
        header('location: ' . MENU['url']);
    }

    public function saveSubject() {
        $subject = new SubjectVO();
        $subject->convert($_POST);
        $this->subjectDAO->insert($subject);
    }

    public function saveGrade() {
        $grade = new GradeVO();
        $grade->convert($_POST);
        $this->GradeDAO->insert($grade);
    }

    public function consultarGrade() {
        $usuarioDAO = new UserDAO($this->cnn);

        $listaGrade = $usuarioDAO->consultarGrade();
        include_once FOLDER_MAIN . '/vista/registeractivities.php';
    }

    public function saveStudent() {
        try {
            $user = new UserVO();
            $user->convert($_POST);
            Validation::required($user->getName(), 'Nombre obligatorio');
            Validation::required($user->getSurname(), 'Apellido obligatorio');
            Validation::required($user->getAddress(), 'Dirección obligatoria');
            Validation::required($user->getId(), 'Número de documento obligatorio');
            Validation::required($user->getDocument_type(), 'Tipo de documento obligatorio');
            Validation::required($user->getPassword(), 'Contraseña obligatoria');
            Validation::required($user->getBirth_date(), 'Fecha de nacimiento obligatoria');
            $user->setId_type_user(3);
            $this->userDAO->insert($user);
        } catch (PlanAException $e) {
            print_r($e->getMessage());
        } catch (Exception $e) {
            print_r('Error al registrarse');
        }
    }
    
    public function saveTeacher() {
        try {
            $user = new UserVO();
            $user->convert($_POST);
            Validation::required($user->getName(), 'Nombre obligatorio');
            Validation::required($user->getSurname(), 'Apellido obligatorio');
            Validation::required($user->getAddress(), 'Dirección obligatoria');
            Validation::required($user->getId(), 'Número de documento obligatorio');
            Validation::required($user->getDocument_type(), 'Tipo de documento obligatorio');
            Validation::required($user->getPassword(), 'Contraseña obligatoria');
            Validation::required($user->getBirth_date(), 'Fecha de nacimiento obligatoria');
            $user->setId_type_user(2);
            $this->userDAO->insert($user);
        } catch (PlanAException $e) {
            print_r($e->getMessage());
        } catch (Exception $e) {
            print_r('Error al registrarse');
        }
    }

    public function saveActivity() {
        $activity = new ActivityVO();
        $activity->convert($_POST);
        Validation::required($activity->getId_grade(), 'Curso obligatorio');
        Validation::required($activity->getId_subject(), 'Asignatura obligatoria');
        Validation::required($activity->getName(), 'Nombre obligatorio');
        $id_user = $_SESSION['user']->getId_user();
        $activity->setId_user($id_user);
        $this->activityDAO->insert($activity);
    }
    
//    public function saveassistance(){
//        
//    }

    public function deleteActivity() {
        $id = $_POST['id'];
        print_r('Se eliminara la actividad ' . $id);
        $this->activityDAO->delete($id);
    }

    public function editarActivity() {
        $id_activity = $_POST['id'];
        $this->GradeDAO->alter($id_activity);
    }
    
    public function deleteGrade(){
        $id = $_POST['id'];
        print_r('Se actualizo el grado' . $id);
        $this->GradeDAO->delete($id);
    }
    
    public function deleteSubject(){
        $id = $_POST['id'];
        print_r('Se elimino la asignatura' . $id);
        $this->subjectDAO->delete($id);
    }
//    public function consultarActivity() {
//        $usuarioDAO = new UserDAO($this->cnn);
//        $listaActivity = $usuarioDAO->consultarActivicty();
//        include_once FOLDER_MAIN . '/vista/consultarActividad.php';
//    }
}
