<html>
    <head>
        <title>- @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            這是主要的側邊欄。
        @show
        
        <div class="container">
            @yield('content')
            <link rel="stylesheet" href="table.scss">
            <table class = "table">
                <tr>
                    <th>1</th>
                    <th>2</th>
                    <th>3</th>
                    <th>4</th>
                </tr>
                <tr>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                    <td>*</td>
                </tr>
            </table>

        </div>
    </body>
</html>