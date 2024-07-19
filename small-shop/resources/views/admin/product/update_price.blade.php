@extends('layout.app')
@section('title')
    update product
@endsection
@section('content')
    <div class="w-full h-[88%] bg-gray-200 flex items-center justify-center">
        <div class="w-[90%] h-5/6 bg-white rounded-xl pt-3 flex flex-col items-center">
            <div class="w-[90%] h-1/5 flex justify-end items-center border-b">
                <h2 class="text-xl">ویرایش محصول</h2>
            </div>
            <div class="flex w-full h-4/5">
                <form action="{{route('product.editPrice',['product'=>$product->id])}}" method="post" class="w-full h-full flex flex-row-reverse">
                    @csrf
                    @method('put')
                    <div class="w-1/2 h-full flex flex-col items-end pr-20 relative">
                        <div class="w-full h-auto flex flex-row-reverse justify-start pt-4">
                            <label for="price" class="font-semibold ml-5">: قیمت محصول</label>
                            <input type="number" name="price" id="price" value="{{$product->price}}" class="w-2/5 h-8 border border-gray-400 rounded outline-0 p-2">
                            @if($errors->has('price'))
                                <p>{{$errors->first('price')}}</p>
                            @endif
                        </div>
                        <input type="submit" value="ویرایش کردن" class="absolute bottom-2 -left-10 text-white bg-gray-700 py-3 px-7 cursor-pointer rounded">
                    </div>
                </form>
            </div>
    </div>
@endsection