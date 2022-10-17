{{-- imgが表示されない --}}
@extends('layouts.format-2')

@section('main')
<div class="cnt-cmn details">
  <div class="cnt-btm">
    <main class="my-8">
        <div class="container px-6 mx-auto">
            <div class="flex justify-center my-6">
                <div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
                  @if ($message = Session::get('success'))
                      <div class="p-4 mb-3 bg-green-400 rounded">
                          <p class="text-green-800">{{ $message }}</p>
                      </div>
                  @endif
                    <h3 class="text-3xl font-bold">Carts</h3>
                  <div class="flex-1">
                    <table class="w-full text-sm lg:text-base" cellspacing="0">
                      <thead>
                        <tr class="h-12 uppercase">
                          <th class="hidden md:table-cell"></th>
                          <th class="text-left">Name</th>
                          <th class="pl-5 text-left lg:text-right lg:pl-0">
                            <span class="lg:hidden" title="Quantity">Qtd</span>
                            <span class="hidden lg:inline">Quantity</span>
                          </th>
                          <th class="hidden text-right md:table-cell"> price</th>
                          <th class="hidden text-right md:table-cell"> Remove </th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach ($cartItems as $item)
                        <tr>
                          <td class="hidden pb-4 md:table-cell">
                            <a href="#">
                              <img src="{{ $item->attributes->image }}" class="w-20 rounded" alt="Thumbnail">
                            </a>
                          </td>
                          <td>
                            <a href="#">
                              <p class="mb-2 md:ml-4 text-purple-600 font-bold">{{ $item->name }}</p>
                              
                            </a>
                          </td>
                          <td class="justify-center mt-6 md:justify-end md:flex">
                            <div class="h-10 w-28">
                              <div class="relative flex flex-row w-full h-8">
                                
                                <form action="{{ route('cart.update') }}" method="POST">
                                  @csrf
                                  <input type="hidden" name="id" value="{{ $item->id}}" >
                                <input type="text" name="quantity" value="{{ $item->quantity }}" 
                                class="w-16 text-center h-6 text-gray-800 outline-none rounded border border-blue-600" />
                                <button class="px-4 mt-1 py-1.5 text-sm rounded rounded shadow text-violet-100 bg-violet-500">Update</button>
                                </form>
                              </div>
                            </div>
                          </td>
                          <td class="hidden text-right md:table-cell">
                            <span class="text-sm font-medium lg:text-base">
                                ${{ $item->price }}
                            </span>
                          </td>
                          <td class="hidden text-right md:table-cell">
                            <form action="{{ route('cart.remove') }}" method="POST">
                              @csrf
                              <input type="hidden" value="{{ $item->id }}" name="id">
                              <button class="px-4 py-2 text-white bg-red-600 shadow rounded-full">x</button>
                          </form>
                            
                          </td>
                        </tr>
                        @endforeach
                         
                      </tbody>
                    </table>
                    <div>
                     Total: ${{ Cart::getTotal() }}
                    </div>
                    <div>
                      <form action="{{ route('cart.clear') }}" method="POST">
                        @csrf
                        <button class="px-6 py-2 text-sm  rounded shadow text-red-100 bg-red-500">Clear Carts</button>
                      </form>
                    </div>


                  </div>
                </div>
              </div>
        </div>
    </main>

        {{-- <div class="cnt-details flex-item">
            <div class="details-img">
                {{$products->img}}
            </div>
            <div class="details-cnt">
                <h2>{{$products->name}}</h2>
                <p>{{$products->farmer}}</p>
                <ul>
                    <li><p>{{$products->volume}}g</p></li>
                    <li><p>税込{{$products->price}}円</p></li>
                    <li>
                        <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $products->id }}" name="id">
                            <input type="hidden" value="{{ $products->name }}" name="name">
                            <input type="hidden" value="{{ $products->img }}" name="img">
                            <input type="hidden" value="{{ $products->price }}"  name="price">
                            <input type="hidden" value="1" name="quantity">
                            <button class="px-4 py-1.5 text-white text-sm bg-blue-800 rounded">Add To Cart</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="details-comments">
            <h3>農家からのメッセージ</h3>
            <p>{{$products->comments}}</p>
        </div> --}}
        <div class="back-btn">
          <a href="/shopping/all">一覧ページに戻る</a>
        </div>
  </div>
@endsection