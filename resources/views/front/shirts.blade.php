@extends('layout.main')

@section('title','All Shirts')
@section('content')

<html class="no-js" lang="en" dir="ltr">
    <body>
        <!-- Latest SHirts -->
        <div class="row">
            
            <ul>
                @forelse ($shirts as $shirt)
                <div class="small-3 columns">
                    <div class="item-wrapper">
                        <div class="img-wrapper">
                            <a class="button expanded add-to-cart">
                                Add to Cart
                            </a>
                            <a href="{{url('shirt')}}">
                            <img src="{{url('images', $shirt->image)}}"/>
                            </a>
                        </div>
                        <a href="{{url('shirt')}}">
                            <h3>
                                {{$shirt->name}}
                            </h3>
                        </a>
                        <h5>
                            ${{$shirt->price}}
                        </h5>
                        <p>
                            {{$shirt->description}}
                        </p>
                    </div>
                </div>
     
                 @empty
     
                 <h3>No Products</h3>
     
                @endforelse
            </ul>
        </div>
</body>
</html>
@endsection