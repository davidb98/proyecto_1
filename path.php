<?php
$proyect = '/plana/';
$mainPath = $proyect . 'index.php';
//define("CARPETA_ARCHIVOS", $proyect . 'archivos/');
//
//
//
//
//define("USUARIO_REGISTRAR", array('url' => $mainPath . '/usuario/registrar', 'controlador' => 'PropietarioControlador', 'metodo' => 'indexRegistrar'));
//define("GESTIONAR_CARCACHA", array('url' => $mainPath . '/menu/gestionar/carcacha', 'controlador' => 'MenuControlador', 'metodo' => 'indexCarcacha'));
//define("GESTIONAR_CARCACHA_GUARDAR", array('url' => $mainPath . '/menu/gestionar/carcacha/guardar', 'controlador' => 'CarroControlador', 'metodo' => 'guardarCarcacha'));
//define("CERRAR_SESION", array('url' => $mainPath . '/index', 'controlador' => 'PropietarioControlador', 'metodo' => 'cerrarSesion'));
//define("GESTIONAR_CARCACHA_ELIMINAR", array('url' => $mainPath . '/menu/gestionar/carcacha/eliminar', 'controlador' => 'CarroControlador', 'metodo' => 'eliminarCarcacha'));
// plana constantes

define("FOLDER_MAIN", __DIR__);
define("FOLDER_RESOURCES", $proyect . 'vista/');


define("MAIN_PATH", $mainPath);
define("USER_LOGIN", array('url' => $mainPath . '/user/login', 'controlador' => 'UserController', 'metodo' => 'login'));
define("USER_STUDENT_INDEX", array('url' => $mainPath . '/user/student', 'controlador' => 'Menu1Controller', 'metodo' => 'indexRegisterStudent'));
define("USER_STUDENT_SAVE", array('url' => $mainPath . '/user/student/save', 'controlador' => 'UserController', 'metodo' => 'saveStudent'));
define("MENU", array('url' => $mainPath . '/menu', 'controlador' => 'Menu1Controller', 'metodo' => 'index'));
define("ACTIVITY_INDEX_TABLE", array('url' => $mainPath . '/user/activity', 'controlador' => 'Menu1Controller', 'metodo' => 'indexTableActivity'));
define("ACTIVITY_INDEX", array('url' => $mainPath . '/user/activity/register', 'controlador' => 'Menu1Controller', 'metodo' => 'indexActivity'));
define("ACTIVITY_SAVE", array('url' => $mainPath . '/user/activity/register/save', 'controlador' => 'UserController', 'metodo' => 'saveActivity'));
define("ACTIVITY_DELETE", array('url' => $mainPath . '/user/activity/show/delete', 'controlador' => 'UserController', 'metodo' => 'deleteActivity'));
define("ACTIVITY_UPDATE_INDEX", array('url' => $mainPath . '/user/activity/show/update', 'controlador' => 'Menu1Controller', 'metodo' => 'indexUpdateActivity'));
define("SUBJECT_INDEX", array('url' => $mainPath . '/user/subject', 'controlador' => 'Menu1Controller', 'metodo' => 'indexManageSubject'));
define("SUBJECT_SAVE", array('url' => $mainPath . '/user/subject/save', 'controlador' => 'UserController', 'metodo' => 'saveSubject'));
define("SUBJECT_DELETE", array('url' => $mainPath . '/user/subject/delete', 'controlador' => 'UserController', 'metodo' => 'deleteSubject'));
define("GRADE_INDEX", array('url' => $mainPath . '/user/grade', 'controlador' => 'Menu1Controller', 'metodo' => 'indexManageGrade'));
define("GRADE_SAVE", array('url' => $mainPath . '/user/grade/save', 'controlador' => 'UserController', 'metodo' => 'saveGrade'));
define("GRADE_DELETE", array('url' => $mainPath . '/user/grade/delete', 'controlador' => 'UserController', 'metodo' => 'deleteGrade'));
define('INDEX_DOCENTE_GUARADAR', array('url' => $mainPath . '/user/Teacher', 'controlador' => 'Menu1Controller', 'metodo' => 'indexRegisterTeacher'));
define("GUARADAR_DOCENTE", array('url' => $mainPath . '/user/Teacher/save', 'controlador' => 'userController', 'metodo' => 'saveTeacher'));
//define("ACTIVITY_CONSULTA_ESTUDENT", array('url' => $mainPath . '/user/activity/search', 'controlador' => 'Menu1Controller', 'metodo' => 'indexConsultarActivity'));
define("ACTIVITY_CONSULTA_PROFESOR", array('url' => $mainPath . '/user/consultar/teacher', 'controlador' => 'Menu1Controller', 'metodo' => 'indexConsultarTeacher'));

define("ACTIVITY_CONSULTA_ESTUDENT", array('url' => $mainPath . '/user/activity/search', 'controlador' => 'Menu1Controller', 'metodo' => 'indexConsultarActivity'));

define("ACTIVITY_CONSULTA_ESTUDENT_PROFESOR", array('url' => $mainPath . '/user/consultar/search', 'controlador' => 'Menu1Controller', 'metodo' => 'indexConsultarStudent'));