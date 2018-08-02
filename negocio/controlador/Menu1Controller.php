<?php

namespace negocio\controlador;

use negocio\generico\GenericController;
use persistencia\dao\ActivityDAO;
use persistencia\dao\GradeDAO;
use persistencia\dao\SubjectDAO;
use persistencia\dao\UserDAO;
use persistencia\dao\AssistanceDAO;
use const FOLDER_MAIN;

class Menu1Controller extends GenericController {

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        parent::validateSession();
    }

    public function index() {
        $user = $_SESSION['user'];
        $id_type_user = $_SESSION['user']->getId_type_user();
        if ($id_type_user == 1) {
            include_once FOLDER_MAIN . '/vista/menu1.php';
        }
        if ($id_type_user == 2) {
            include_once FOLDER_MAIN . '/vista/menu2.php';
        }
        if ($id_type_user == 3) {
            include_once FOLDER_MAIN . '/vista/menu3.php';
        }
    }

    public function indexRegisterStudent() {
        $id_type_user = $_SESSION['user']->getId_type_user();
        if (!parent::sesionRol($id_type_user)) {
            include_once FOLDER_MAIN . '/vista/registerStudent.php';
        } else {
            echo 'No tiene permitida esta accion';
        }
    }

    public function indexRegisterTeacher() {
        $id_type_user = $_SESSION['user']->getId_type_user();
        if (!parent::sesionRol($id_type_user)) {
            include_once FOLDER_MAIN . '/vista/registrarProfesores.php';
        } else {
            echo 'No tiene permitida esta accion';
        }
    }

    public function indexActivity() {
        $id_type_user = $_SESSION['user']->getId_type_user();
        if (!parent::sesionRol($id_type_user)) {
            $gradeDAO = new GradeDAO($this->cnn);
            $subjectDAO = new SubjectDAO($this->cnn);
            $listSubject = $subjectDAO->consult();
            $listGrade = $gradeDAO->consult();
            include_once FOLDER_MAIN . '/vista/registeractivities.php';
        } else {
            echo 'No tiene permitida esta accion';
        }
    }

    public function indexTableActivity() {
        $userDAO = new UserDAO($this->cnn);
        $consult = $userDAO->consultActivity();
        include_once FOLDER_MAIN . '/vista/manageactivities.php';   
    }

    public function indexUpdateActivity() {
        $usuarioDAO = new UserDAO($this->cnn);
        $id_activity = $_POST['id'];
        $consult = $usuarioDAO->editarActivity();
        include_once FOLDER_MAIN . '/vista/updateactivity.php';
    }

    public function indexManageSubject() {
        $id_type_user = $_SESSION['user']->getId_type_user();
        if (!parent::sesionRol($id_type_user)) {
            $subjectDAO = new SubjectDAO($this->cnn);
            $lista = $subjectDAO->consult();
            include_once FOLDER_MAIN . '/vista/manageSubject.php';
        } else {
            echo 'No tiene permitida esta accion';
        }
    }

    public function indexManageGrade() {
        $id_type_user = $_SESSION['user']->getId_type_user();
        if (!parent::sesionRol($id_type_user)) {
            $gradeDAO = new GradeDAO($this->cnn);
            $lista = $gradeDAO->consult();
            include_once FOLDER_MAIN . '/vista/manageGrade.php';
        } else {
            echo 'No tiene permitida esta accion';
        }
    }
    //usuario estudiante
     public function indexConsultarActivity() {
         
        $userDAO = new ActivityDAO($this->cnn);

        $consult = $userDAO->consult();
        
          include_once FOLDER_MAIN . '/vista/consultarActividad.php';
    }
    //usuario estudiante
       public function indexConsultarTeacher() {
         
        $userDAO = new UserDAO($this->cnn);

        $consultTeacher = $userDAO->consultTeacher();
        
          include_once FOLDER_MAIN . '/vista/consultaProfesores.php';
    }
     //usuario profesor
          public function indexConsultarStudent() {
         
        $userDAO = new UserDAO($this->cnn);

        $consultStudent = $userDAO->consultStudent();
        
          include_once FOLDER_MAIN . '/vista/consultarEstudiante.php';
    }
    //usuario profesor y administrador
//          public function indexResgistrarAsistencia() {        
//              
//          include_once FOLDER_MAIN . '/vista/registroInasistencia.php';
//    }

}
