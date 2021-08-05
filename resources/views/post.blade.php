<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Material Editor | OClass Official Learning Website</title>

    <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('css/edit.css')}}" media="screen">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
</head>
<body>
    <form action="{{route('post', $id)}}" method="post" enctype="application/x-www-form-urlencoded">
        @csrf
        <div class="u-custom-color-1 p-4">
            <h2>Material Editor</h2>
            <h3 class="font-bold mb-2">Embed URL</h3>
            <input type="text" name="embed" class="w-full text-xl px-2" value="{{old('embed') ?? ($id ? $material->embed : '')}}">
            <p>
                Please upload the video first to youtube or drive, then make an embedded url. If them return an IFrame, you could get the url from ‘src’ attribute.<br>
                &lt;iframe src=”https://...”&gt;<br />
                If you are not filling this form, the material type would become text post.
            </p>
        </div>
        <div class="p-4">
            <div class="text-xl">
                <span>Session</span>
                <input class="border-gray-300 border border-solid w-8" type="number" name="session" value="{{old('embed') ?? ($id ? $material->session : 0)}}">
                -
                <input class="border-gray-300 border border-solid" type="date" name="session_date" value="{{old('session_date') ?? ($id ? $material->session_date : '')}}">
            </div>
            <div class="text-3xl mt-4">
                <input class="border-gray-300 border border-solid px-2 w-full" type="text" name="session_name" placeholder="Session Name" value="{{old('session_name') ?? ($id ? $material->session_name : '')}}">
            </div>
            <div class="mt-4">
                <textarea class="border-gray-300 border border-solid w-full" name="content" id="" rows="7">{{old('content') ?? ($id ? $material->content : '')}}</textarea>
            </div>
            <div class="w-full flex flex-row-reverse mt-2">
                <button type="submit" class="px-4 py-2 rounded-md bg-blue-400 text-white hover:text-white ml-4">Post</button>
                <a href="{{route('material')}}" class="px-4 py-2 rounded-md border border-solid border-blue-400 text-blue-400 hover:text-blue-400">Cancel</a>
            </div>
        </div>
    </form>
</body>
</html>
