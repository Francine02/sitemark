<?php

namespace App\Http\Controllers;

use App\Http\Requests\LinkRequest;
use App\Services\LinkService;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    protected $service;

    public function __construct(LinkService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $links = $this->service->getLinks();

        return view('pages.home.index', compact('links'));
    }

    public function show($id)
    {
        $link = $this->service->getLink($id);

        return view('pages.home.index', compact('link'));
    }

    public function store(LinkRequest $request)
    {
        $data = $request->validated();

        try {
            $this->service->createLink(
                $data,
                $request->file('image')
            );

            return redirect()
                ->route('home')
                ->with('success', 'Link criado com sucesso!');
        } catch (\Exception $ex) {
            return back()
                ->withInput()
                ->with('error', 'Erro ao criar link');
        }
    }

    public function update(LinkRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->service->updateLink(
                $data,
                $request->file('image'),
                $id
            );

            return redirect()->route('home')->with('success', 'Link atualizado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'Erro ao atualizar link');
        }
    }

    public function updatePosition(Request $request)
    {
        $this->service->updatePositions($request->order);

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        try {
            $this->service->deleteLink($id);

            return redirect()->route('home')->with('success', 'Link deletado com sucesso!');
        } catch (\Exception $ex) {
            return redirect()->back()->withInput()->with('error', 'Erro ao deletar link');
        }
    }
}
