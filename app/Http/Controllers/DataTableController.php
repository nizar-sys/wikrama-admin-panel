<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Informasi;
use App\Models\InformasiLink;
use App\Models\Message;
use App\Models\Page;
use App\Models\Post;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    public function getUsers()
    {
        $userQuery = User::query();

        $users = $userQuery->latest();
        return datatables()->of($users)
            ->addIndexColumn()
            ->editColumn('name', fn ($user) => str()->title($user->name))
            ->addColumn('action', function ($user) {
                $buttons = '<button onclick="updateData(\'' . $user->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $user->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('role', fn ($user) => str()->title($user->role))
            ->editColumn('avatar', function ($user) {
                $avatar = $user->avatar;

                $path = asset('/uploads/images/' . $avatar);
                $type = pathinfo($path, PATHINFO_EXTENSION);

                $img = '<img data-path="' . $path . '" src="' . $path . '" onclick="showImageDetail(\'' . $path . '\')" class="img-thumbnail img-avatar" width="50px">';
                return $img;
            })
            ->rawColumns(['action', 'role', 'avatar'])
            ->make(true);
    }

    public function getInformasi()
    {
        $informasiQuery = Informasi::query();
        $informasis = $informasiQuery->orderByDesc('id');

        return datatables()->of($informasis)
            ->addIndexColumn()
            ->editColumn('title', fn ($informasi) => str()->title($informasi->title))
            ->editColumn('media', function ($informasi) {
                $media = $informasi->media;
                $path = asset('/uploads/images/' . $media);
                $img = '<img data-path="' . $path . '" onclick="showImageDetail(\'' . $path . '\')" src="' . $path . '" class="img-thumbnail img-thumb" width="200px" style="cursor: pointer;">';
                return $img;
            })
            ->editColumn('status', fn ($informasi) => $informasi->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($informasi) {
                $buttons = '<button onclick="updateData(\'' . $informasi->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $informasi->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>

                    <a href="' . route('informasi-link.index', ['id' => $informasi->id]) . '" class="btn btn-primary btn-sm">
                        <i class="fas fa-link"></i>
                    </a>
                    ';

                return $buttons;
            })
            ->editColumn('created_at', fn ($informasi) => date('d/M/Y', strtotime($informasi->created_at)))
            ->editColumn('updated_at', fn ($informasi) => date('d/M/Y', strtotime($informasi->updated_at)))
            ->rawColumns(['action', 'media', 'status'])
            ->make(true);
    }

    public function getInformasiLink(Request $request)
    {
        $informasiLinkQuery = InformasiLink::query();

        if ($request->has('id')) {
            $informasiLinkQuery->whereInformasiId($request->id);
        }

        $informasiLinks = $informasiLinkQuery->orderByDesc('id');

        return datatables()->of($informasiLinks)
            ->addIndexColumn()
            ->editColumn('title', fn ($informasiLink) => str()->title($informasiLink->title))
            ->editColumn('status', fn ($informasiLink) => $informasiLink->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($informasiLink) {
                $buttons = '<button onclick="updateData(\'' . $informasiLink->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $informasiLink->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('url', fn ($informasiLink) => '<a class="btn btn-sm btn-primary" href="' . $informasiLink->url . '" target="_blank">' . $informasiLink->url . '</a>')
            ->editColumn('created_at', fn ($informasiLink) => date('d/M/Y', strtotime($informasiLink->created_at)))
            ->editColumn('updated_at', fn ($informasiLink) => date('d/M/Y', strtotime($informasiLink->updated_at)))
            ->rawColumns(['action', 'status', 'url'])
            ->make(true);
    }


    public function getSliders()
    {
        $slidersQuery = Slider::query();
        $sliders = $slidersQuery->orderByDesc('id');

        return datatables()->of($sliders)
            ->addIndexColumn()
            ->editColumn('title', fn ($slider) => str()->title($slider->title))
            ->editColumn('subtitle', fn ($slider) => str()->title($slider->subtitle))
            ->editColumn('media', function ($slider) {
                $path = $slider->media;
                $img = '<img data-path="' . $path . '" onclick="showImageDetail(\'' . $path . '\')" src="' . $path . '" class="img-thumbnail img-thumb" width="200px" style="cursor: pointer;">';
                return $img;
            })
            ->editColumn('status', fn ($slider) => $slider->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($slider) {
                $buttons = '<button onclick="updateData(\'' . $slider->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $slider->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('position', fn ($slider) => str()->title($slider->position))
            ->rawColumns(['action', 'media', 'status'])
            ->make(true);
    }

    public function getPages()
    {
        $pageQuery = Page::query();

        $pages = $pageQuery->orderByDesc('id');

        return datatables()->of($pages)
            ->addIndexColumn()
            ->editColumn('title', fn ($page) => str()->title($page->title))
            ->editColumn('status', fn ($page) => $page->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($page) {
                $buttons = '<button onclick="updateData(\'' . $page->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $page->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('created_at', fn ($page) => date('d/M/Y', strtotime($page->created_at)))
            ->editColumn('updated_at', fn ($page) => date('d/M/Y', strtotime($page->updated_at)))
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function getPosts(Request $request)
    {
        $postQuery = Post::query();

        if ($request->has('page_id')) {
            $postQuery->whereInformasiId($request->page_id);
        }

        $posts = $postQuery->orderByDesc('id');

        return datatables()->of($posts)
            ->addIndexColumn()
            ->editColumn('title', fn ($post) => str()->title($post->title))
            ->editColumn('content', fn ($post) => strip_tags(str()->limit($post->content, 100, '...')))
            ->editColumn('status', fn ($post) => $post->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($post) {
                $buttons = '<button onclick="updateData(\'' . $post->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $post->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('created_at', fn ($post) => date('d/M/Y', strtotime($post->created_at)))
            ->editColumn('updated_at', fn ($post) => date('d/M/Y', strtotime($post->updated_at)))
            ->rawColumns(['action', 'status'])
            ->make(true);
    }

    public function getAlbums()
    {
        $albumQuery = Album::query();
        $albums = $albumQuery->orderByDesc('id');

        return datatables()->of($albums)
            ->addIndexColumn()
            ->editColumn('title', fn ($album) => str()->title($album->title))
            ->editColumn('description', fn ($album) => str()->limit(str()->title($album->description), 50))
            ->editColumn('media', function ($album) {
                $media = $album->media;
                $path = asset('/uploads/images/' . $media);
                $type = pathinfo($path, PATHINFO_EXTENSION);

                $img = '<img data-path="' . $path . '" onclick="showImageDetail(\'' . $path . '\')" src="' . $path . '" class="img-thumbnail img-thumb" width="200px" style="cursor: pointer;">';
                return $img;
            })
            ->editColumn('status', fn ($album) => $album->status == '0' ? '<span class="badge badge-danger">In active</span>' : '<span class="badge badge-success">Active</span>')
            ->addColumn('action', function ($album) {
                $buttons = '<button onclick="updateData(\'' . $album->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $album->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->rawColumns(['action', 'media', 'status'])
            ->make(true);
    }

    public function getMessages()
    {
        $messageQuery = Message::query();
        $messages = $messageQuery->orderByDesc('id');

        return datatables()->of($messages)
            ->addIndexColumn()
            ->editColumn('name', fn ($message) => str()->title($message->name))
            ->editColumn('email', fn ($message) => $message->email)
            ->editColumn('message', fn ($message) => str()->title($message->message))
            ->editColumn('status', function ($message) {
                $bgBadge = 'badge badge-';
                $status = $message->status;

                if ($status == 'pending') {
                    $bgBadge .= 'warning';
                } else if ($status == 'spam') {
                    $bgBadge .= 'danger';
                } else if ($status == 'approved') {
                    $bgBadge .= 'success';
                }

                $status = '<span class="' . $bgBadge . '">' . $status . '</span>';

                return $status;
            })
            ->addColumn('action', function ($message) {
                $buttons = '<button onclick="updateData(\'' . $message->id . '\')" class="btn btn-warning btn-sm">
                    <i class="fas fa-pencil-alt"></i>
                    </button>
                    
                    <button onclick="deleteData(\'' . $message->id . '\')" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i>
                    </button>
                    ';

                return $buttons;
            })
            ->editColumn('created_at', fn ($message) => date('d/M/Y', strtotime($message->created_at)))
            ->editColumn('updated_at', fn ($message) => date('d/M/Y', strtotime($message->updated_at)))
            ->rawColumns(['action', 'status'])
            ->make(true);
    }
}
