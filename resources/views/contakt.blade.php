@extends('layouts.header')

@section('title')
	<title>Контакты</title>
@endsection('')

@section('content')
<div class="container">

    <label for="fname">Имя</label>
    <input type="text" id="fname" name="firstname" placeholder="Ваше имя..">

    <label for="lname">Фамилия</label>
    <input type="text" id="lname" name="lastname" placeholder="Ваша фамилия..">

    <label for="gorod">Город</label>
    <select id="gorod" name="gorod">
      <option value="Irkutsk">Иркутск</option>
      <option value="Angarsk">Ангарск</option>
      <option value="Bratsk">Братск</option>
    </select>

    <label for="subject">Сообщение</label>
    <textarea id="subject" name="subject" placeholder="Написать нечто.." style="height:200px"></textarea>

    <input type="submit" value="Отправить">


</div>
@endsection('')
	
