<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('head')

<body>
    <div id="app">
            <Layout v-if="Auth" ></Layout>
            <Out else ></Out>


    </div>
</body>

</html>
