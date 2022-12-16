@extends('layouts.admin')

@section('content')
   <div class="container">
    <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex">
                <h6 class="m-0 font-weight-bold text-primary">
                    {{ __('Posts') }}
                </h6>
                <div class="ml-auto">
                    @can('posts_create')
                    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">
                        <span class="icon text-white-50">
                            <i class="fa fa-plus"></i>
                        </span>
                        <span class="text">{{ __('New posts') }}</span>
                    </a>
                    @endcan
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Product count</th>
                        <th>Parent</th>
                        <th class="text-center" style="width: 30px;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @forelse($posts as $post) --}}
                        <tr>
                            <td>
                                {{-- {{ $loop->iteration }} --}}
                            </td>
                            <td>
                                {{-- @if($post->cover)
                                    <img src="{{ Storage::url('images/categories/' . $post->cover) }}"
                                        width="60" height="60" alt="{{ $post->name }}">
                                @else
                                    <img src="{{ asset('img/no-img.png') }}" width="60" height="60" alt="{{ $post->name }}">
                                @endif --}}
                            </td>
                            <td>
                                {{-- <a href="{{ route('admin.categories.show', $post->id) }}">
                                    {{ $category->name }}
                                </a> --}}
                            </td>
                            <td>
                                {{-- {{ $post->products_count }} --}}
                            </td>
                            <td>
                                {{-- {{ $post->parent->name ?? '' }} --}}
                            </td>
                            <td>
                                {{-- <div class="btn-group btn-group-sm">
                                    <a href="" class="btn btn-sm btn-primary">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form onclick="return confirm('are you sure !')" action=""
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div> --}}
                            </td>
                        </tr>
                    {{-- @empty --}}
                        <tr>
                            <td class="text-center" colspan="6">No categories found.</td>
                        </tr>
                    {{-- @endforelse --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="float-right">
                                    {{-- {!! $categories->appends(request()->all())->links() !!} --}}
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
   </div>
@endsection
