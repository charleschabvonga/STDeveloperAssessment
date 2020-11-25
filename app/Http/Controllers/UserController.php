<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @var userService
     */
    private $userService;

    /**
     * PostController Constructor
     *
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userService->all();
        return view('index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'username'=> ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6', 'confirmed'],
            'password_confirmation' => ['required', 'min:6'],
            'mobile' => ['required', 'unique:users'],
            'name'=> ['required'],
            'surname'=> ['required'],
            'job_title'=> ['required'],
            'bio'=> ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.index')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['username', 'email', 'password', 'mobile', 'name', 'surname', 'job_title', 'bio']);

        $this->userService->save($data);

        return redirect()->route('users.index')
            ->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function edit(User $user)
    {
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(),[
            'username'=> ['required'],
            'mobile' => ['required', 'string', 'unique:users,mobile,'.$user->id],
            'name'=> ['required'],
            'surname'=> ['required'],
            'job_title'=> ['required'],
            'bio'=> ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('users.index')
                ->withErrors($validator)
                ->withInput();
        }

        $data = $request->only(['username', 'mobile', 'name', 'surname', 'job_title', 'bio']);
        $this->userService->update($user, $data);

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Model $user
     * @return Response
     */
    public function destroy(Model $user)
    {
        //
    }
}
