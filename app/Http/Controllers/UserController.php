<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteRegisterRequest;
use App\Services\UserService;

class UserController extends Controller
{
    protected $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function showProfile()
    {
        return view('pages.user.profile');
    }

    public function update(CompleteRegisterRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->updateUser(
                $data,
                $request->file('image')
            );

            return redirect()->route('profile')->with('success', 'Usuário atualizado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'Erro ao atualizar usuário');
        }
    }
}
