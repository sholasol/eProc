<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $mailData['doc_title'] }}</title>
    <style>
        body {
            overflow-x: hidden;
            font-family: sans-serif;
            height: 100vh;
            text-align: center !important;
            background-size: cover;
            background-repeat: no-repeat;
            height: 100vh;
            background: linear-gradient(169deg, rgba(0, 151, 131, 1) 0%, rgba(152, 241, 169, 1) 50%);
        }

        .reqbutton {
            border-radius: 15px;
            border: none;
            padding: .5rem .8rem .5rem .8rem;
            width: 10rem;
            display: block;
        }

        .button {
            border-radius: 15px;
            border: none;
            padding: .5rem .8rem .5rem .8rem;
            width: 80%;
        }

        .mcol-3 {
            flex: auto;
            width: 25%;
        }

        .mrow {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 0 2rem 0;
        }

        .box {
            width: 50%;
            background: #fff;
            border-radius: 20px;
            padding: .8rem;
        }

        .mcontainer {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 3rem;
            /* padding-bottom: 3rem; */
            padding-right: .3rem;
            padding-left: .3rem;
        }

        .myimg-fluid {
            max-width: 100%;
            height: auto;
        }

        .vbtn {
            background: rgb(2, 107, 2);
            color: #fff;
            text-decoration: none;
            margin: auto;
        }

        .vbtn:hover {
            opacity: .7;
        }

        .btn {
            background: rgb(2, 90, 2);
            color: #fff;
        }

        .btnSuccess {
            background: rgb(2, 90, 2);
            color: #fff;
        }

        .btnDanger {
            background: red;
            color: #fff;
        }

        .btnWarn {
            background: rgb(233, 229, 2);
            color: #fff;
        }

        .btnPrim {
            background: rgb(4, 4, 85);
            color: #fff;
        }

        b {
            color: rgb(2, 90, 2);
        }

        .btmHr {
            border-bottom: solid grey 1px;
            padding-bottom: 1rem;
        }

        .bold {
            font-weight: 600;
        }

        .rrrr {
            color: #ddd;
        }

        @media (max-width: 991px) {
            .box {
                width: 80%;
                /* padding: 2px; */
            }
        }

        @media (max-width: 600px) {
            .button {
                width: 80%;
            }
        }

        @media (max-width: 500px) {
            .box {
                width: 95%;
                /* padding: 2px; */
            }
        }
    </style>
</head>

<body>
    <div class="mcontainer">
        <div class="box">
            <header>
                <h1 style="font-weight: bolder;">{{ $mailData['doc_title'] }}</h1>
                <img src="{{ asset('asset/logo.jpg') }}" class="myimg-fluid" alt="company logo">
            </header>
            <main>
                <div class="btmHr">
                    <p class="bold"><em>Request No:</em> {{$mailData['req_no']}}</p>
                    <p><b>Action: </b>
                        @if ($mailData['reply_type'] == "Approved")
                            <span style="color: rgb(17, 152, 17);">{{$mailData['reply_type']}}</span>
                        @elseif ($mailData['reply_type'] == "Declined")
                            <span style="color: crimson">{{$mailData['reply_type']}}</span>
                        @elseif ($mailData['reply_type'] == "Revised")
                            <span style="color: rgb(165, 165, 22)">{{$mailData['reply_type']}}</span>
                        @else
                            <span style="color: blue">Awaiting</span>
                        @endif
                    </p>
                    <hr class="rrrr" />
                    <div style="text-align: justify; padding:15px 30px;">
                        <h4><b>{{ $mailData['who_rem'] }} Remark</b></h4>
                        <p>
                            {{ $mailData['remark'] }}
                        </p>
                    </div>
                    <a href="" class="reqbutton vbtn">View Request</a>
                </div>
                <div class="mrow">
                    @if ($req->dept_approval =="Approved")
                    <div class="mcol-3">
                        <button class="button btnSuccess">Dept. Approved</button>
                    </div>
                    @elseif ($req->dept_approval =="Revised")
                    <div class="mcol-3">
                        <button class="button btnWarn">Sent for Revision</button>
                    </div>
                    @elseif ($req->dept_approval =="Declined")
                    <div class="mcol-3">
                        <button class="button btnDanger">Dept. Declined</button>
                    </div>
                    @else
                    <div class="mcol-3">
                        <button class="button btnPrim">Awaiting Dept. Resp.</button>
                    </div>
                    @endif

                    @if ($req->proc_approval =="Approved")
                    <div class="mcol-3">
                        <button class="button btnSuccess">Proc. Approved</button>
                    </div>
                    @elseif ($req->proc_approval =="Revised")
                    <div class="mcol-3">
                        <button class="button btnWarn">Sent for Revision</button>
                    </div>
                    @elseif ($req->proc_approval =="Declined")
                    <div class="mcol-3">
                        <button class="button btnDanger">Proc. Declined</button>
                    </div>
                    @else
                    <div class="mcol-3">
                        <button class="button btnPrim">Awaiting Proc. Resp.</button>
                    </div>
                    @endif

                    @if ($req->fin_approval =="Approved")
                    <div class="mcol-3">
                        <button class="button btnSuccess">Fin. Approved</button>
                    </div>
                    @elseif ($req->fin_approval =="Revised")
                    <div class="mcol-3">
                        <button class="button btnWarn">Sent for Revision</button>
                    </div>
                    @elseif ($req->fin_approval =="Declined")
                    <div class="mcol-3">
                        <button class="button btnDanger">Fin. Declined</button>
                    </div>
                    @else
                    <div class="mcol-3">
                        <button class="button btnPrim">Awaiting Fin. Resp.</button>
                    </div>
                    @endif
                </div>
            </main>

        </div>
    </div>
</body>

</html>
