<?php

namespace App\Http\Controllers\Configuration\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\GeneralRequest;
use App\Mail\User\UserNewPasswordMail;
use App\Repositories\Users\UserPasswordRepository;
use App\Validators\Users\UserPasswordValidator;
use Illuminate\Support\Facades\Mail;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;


class UserPasswordController extends Controller
{

    protected $repository;

    protected $validator;

    public function __construct(
        UserPasswordRepository $repository,
        UserPasswordValidator $validator
    ) {
        $this->repository = $repository;
        $this->validator = $validator;
    }

    public function edit($id)
    {
        $dados = $this->repository->find($id);

        $config = $this->header($dados);
        $config['action'] = 'Alterar Senha';

        return view('system.configuration.user.password.edit', compact('dados', 'config'));
    }

    public function header($user)
    {
        $config['title'] = "Alterar Senha > " . $user->name;
        $config['routeMenuN'] = route('system.configuration.user.index');
        $config['activeMenu'] = 'configuration';
        $config['titleMenu'] = 'Configurações';
        $config['routeMenuN2'] = route('system.configuration.user.index');
        $config['activeMenuN2'] = 'user';
        $config['titleMenuN2'] = 'Usuários';

        return $config;
    }

    public function update(GeneralRequest $request, $id)
    {
        try {
            $dataPassword = $request->all();
            $data = $this->repository->find($id)->toArray();
            $data['password'] = $dataPassword['password'];
            $data['password_confirmation'] = $dataPassword['password_confirmation'];

            $passwordCreated = isset($data['password']) ? $data['password'] : null;

            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
            $data['password'] = isset($data['password']) ? bcrypt($data['password']) : null;
            $data['password_confirmation'] = $data['password'];

            $dados = $this->repository->update($data, $id);

            //Mail::to($dados->email)->send(new UserNewPasswordMail($dados, $passwordCreated));

            $response = [
                'success' => 'Senha atualizada com sucesso!'
            ];

            return redirect()->back()->with('success', $response['success']);
        } catch (ValidatorException $e) {
            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    public function generatePassword($id)
    {
        $user = $this->repository->find($id);
        //$passwordCreated = (new UtilObjeto)->generatePassword();

        $data = $user->toArray();
        //$data['password'] = $passwordCreated;
        //$data['password_confirmation'] = $passwordCreated;

        $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_UPDATE);
        $data['password'] = isset($data['password']) ? bcrypt($data['password']) : null;
        $data['password_confirmation'] = $data['password'];

        $dados = $this->repository->update($data, $id);

        //Mail::to($user->email)->send(new UserNewPasswordMail($user, $passwordCreated));
        $response = [
            'success' => 'Senha atualizada e enviada com sucesso!'
        ];

        return redirect()->back()->with('success', $response['success']);
    }
}
