@extends('admin.templates.master')
@section('content')

    <div class="page-content">
        <figure class="entry-media">
            <img src="{{asset('layouts/images/blog/single/fullwidth/1.jpg')}}" alt="image desc">
        </figure><!-- End .entry-media -->
        <div class="container">
            <table>
            <article class="entry single-entry entry-fullwidth">
                <h2>{{$products->name}}</h2>
                <h4>{{$products->category_id}}</h4>
                <h4>{{$products->price}}</h4>
                <h4>{{$products->information}}</h4>
                <h4>{{$products->description}}</h4>
                <h4>{{$products->image}}</h4>
            </article><!-- End .entry -->
            <td>
                <button type="button" class="btn btn-info"><a
                        href="/admin/products/edit/{{$row->id}}" style="color: white">Edit</a>
                </button>
                <form method="POST" action="/admin/products/delete/{{$row->id}}">
                    @method('PATCH')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
            </table>
        </div><!-- End .container -->
    </div><!-- End .page-content -->
@endsection


