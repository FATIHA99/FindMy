<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\StudentModel;

class StudentController extends Controller
{
    public function studentList()
    {
        $student = new StudentModel();
        if ($student->selectAll()){
            $students = $student->dataList;
            return $this->render('student', [
                'students' => $students,
            ]);
        }
    }

    public function add(Request $request)
    {
        $student = new StudentModel();

        if($request->isPost())
        {
            $student->loadData($request->getBody());

            if ($student->save()){ //to integrate validate method
                Application::$app->session->sefFlash('success', 'has successfully added');
                Application::$app->response->redirect('student');
            }

            return $this->render('addStudent', [
                'model' => $student
            ]);
        }

        return $this->render('addStudent', [
            'model' => $student
        ]);    
    }

    
    public function update(Request $request)
    {
        $student = new StudentModel();
        
        if ($request->isGet()){  
            $student->loadData($request->getBody());
            $student->select($student->id);
            $student->loadData($student->dataList);
            $params = [
                'model' => $student
            ];      
            return $this->render('updateStudent', $params);
        }
        if($request->isPost())
        {   
            
            $student->loadData($request->getBody());

            if ($student->update($student->id)){
                Application::$app->session->sefFlash('success', 'Thanks for updating Student');
                Application::$app->response->redirect('student');
            }

            return $this->render('updateStudent', [
                'model' => $student
            ]);
        }

        return $this->render('updateStudent', [
            'model' => $student
        ]);    
    }


    public function delete(Request $request)
    {
        $student = new StudentModel();
        

        if ($request->isGet()){  
            $student->loadData($request->getBody());
            if ($student->delete($student->id)){ //to integrate validate method
                Application::$app->session->sefFlash('success', 'has successfully deleted');
                Application::$app->response->redirect('student');
            }
        }

        
    }
    
}