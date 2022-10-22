@extends('layouts.farmer-format')

@section('main')
<div class="cnt-top">
  <h2>商品登録</h2>
  @if (count($errors) > 0)
  <ul>
    @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
  </ul>
  @endif
  <form action="/farmer/product/add" method="post" enctype="multipart/form-data">
    <table>
      @csrf
      <tr>
        <th>
          name
        </th>
        <td>
          <input type="text" name="name">
        </td>
      </tr>
      <tr>
        <th>
          farmer
        </th>
        <td>
          <input type="text" name="farmer">
        </td>
      </tr>
      <tr>
        <th>
          img
        </th>
        <td>
          <input type="file" name="img">
        </td>
      </tr>
      <tr>
        <th>
          volume
        </th>
        <td>
          <input type="text" name="volume">
        </td>
      </tr>
      <tr>
        <th>
          price
        </th>
        <td>
          <input type="text" name="price">
        </td>
      </tr>
      <tr>
        <th>
          comments
        </th>
        <td>
          <input type="textarea" cols="50" rows="10" name="comments">
        </td>
      </tr>
      <tr>
        <th></th>
        <td>
          <button>送信</button>
        </td>
    </table>
  </form>
  <br>
  <div class="all-btn">
    <a href="/farmer/dashboard">ホーム画面に戻る</a>
  </div>
</div>
@endsection