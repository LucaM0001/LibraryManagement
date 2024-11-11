<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BookModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('login');
    }

    public function login() {
        $model = new UserModel();
        $user = [
            "email" =>  $this->request->getPost("email"),
            "password" => $this->request->getPost("password")
        ];

        $data["users"] = $model->findAll();
        $user_exist = false;
        foreach($data["users"] as $row) {
            if (($row['email'] === $user["email"]) && (password_verify($user["password"], $row["password"]))) {
                $user_exist = true;
            } 
        }

        return $user_exist ? redirect()->to("home") : redirect()->to("loginError");
    }

    public function loginError(): string
    {
        return view('/loginError');
    }

    public function Signup(): string
    {
        return view('/signup');
    }

    public function createUser() {
        $model = new UserModel();
        $users = $model->findAll();
        $user = [
            "email" => $this->request->getPost("email"),
            "password" => password_hash($this->request->getPost("password"), PASSWORD_DEFAULT)
        ];

        $emailExist = false;

        foreach($users as $row) {
            if ($row["email"] == $user["email"]) {
                $emailExist = true;
            }
        }

        if ($emailExist == false) {
            $model->insert($user);
            return redirect()->to("");
        } else {
            return redirect()->to("signupError");
        }
    }

    public function signupError(): string {
        return view("signupError");
    }

    public function Home(): string {
        $model = new BookModel();
        $data["books"] = $model->findAll();
        return view("/home", $data);
    }

    public function Admin(): string {
        $model = new BookModel();
        $data["books"] = $model->findAll();
        return view("/admin", $data);
    }

    public function AddBook(): string {
        return view("/add");
    }

    public function createBook() {
        $model = new BookModel();
        $book = [];
            $book = [
                "title" => $this->request->getPost("title"),
                "author" => $this->request->getPost("author"),
                "numberOfPages" => $this->request->getPost("numberOfPages"),
            ];
        $model->insert($book);
        return redirect()->to("/admin");
    }

    public function deleteBook($id) {
        $model = new BookModel();
        $model->delete($id);
        return redirect()->to("/admin");
    }

    public function borrowBook($id) {
        $model = new BookModel();
        $time = time();
        $data = [
            "borrowing_date" => date("Y-m-d", $time),
            "status" => "indisponible"
        ];

        $model->update($id, $data);
        return redirect()->to('home');
    }

    public function deliverBook($id) {
        $model = new BookModel();
        $time = time();
        $data = [
            "borrowing_date" => "",
            "status" => "disponible"
        ];

        $model->update($id, $data);
        return redirect()->to('home');
    }

    public function Update($id): string {
        $model = new BookModel();
        $data['book'] = $model->find($id);
        return view('/update', $data);
    }

    public function updateBook($id) {
        $model = new BookModel();
        $data = [
            "title" => $this->request->getPost("title"),
            "author" => $this->request->getPost("author"),
            "numberOfPages" => $this->request->getPost("numberOfPages"),
        ];
        $model->update($id, $data);
        return redirect()->to('/admin');
    }
}
