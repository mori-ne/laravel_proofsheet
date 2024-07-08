<h1>{{ $user->project_name }}</h1>
<form action="#">
    <input type="email" name="email" value="">
    <input type="password" name="password">
    <input type="submit" value="ログイン">
    <button type="submit">新規登録</button>
</form>
<a href="#">パスワードを忘れた</a>
{{ dd($user) }}
