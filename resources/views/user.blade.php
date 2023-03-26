<HTML:5>
    <HEAD>
        <TITLE>My Page</TITLE>
    </HEAD>
    <BODY>
        <H1>My Page</H1>
        <P>This is my page.</P>
        <h1>{{$user}}</h1>

        @for($i = 0; $i < 10; $i++)
            {{$i}}
            {{$user}}
        @endfor

    </BODY>
</HTML:5>