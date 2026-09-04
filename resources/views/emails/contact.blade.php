<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>New Contact Inquiry</title>

<style>

body{
    margin:0;
    padding:40px;
    background:#F4F7FC;
    font-family:Arial,Helvetica,sans-serif;
}

.wrapper{
    max-width:650px;
    margin:auto;
    background:#ffffff;
    border-radius:12px;
    overflow:hidden;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.header{

    background:#2563EB;
    color:#ffffff;
    text-align:center;
    padding:28px;

}

.header h2{

    margin:0;
    font-size:28px;

}

.content{

    padding:35px;

}

.table{

    width:100%;
    border-collapse:collapse;

}

.table td{

    padding:14px;
    border-bottom:1px solid #ECECEC;
    font-size:15px;

}

.label{

    font-weight:bold;
    width:180px;
    color:#2563EB;

}

.message{

    margin-top:25px;

    padding:20px;

    background:#F7F9FC;

    border-left:4px solid #2563EB;

    border-radius:6px;

    line-height:28px;

}

.footer{

    text-align:center;

    padding:20px;

    background:#F7F7F7;

    color:#888;

    font-size:13px;

}

</style>

</head>

<body>

<div class="wrapper">

<div class="header">

<h2>New Contact Inquiry</h2>

</div>

<div class="content">

<table class="table">

<tr>

<td class="label">Full Name</td>

<td>{{ $data['name'] }}</td>

</tr>

<tr>

<td class="label">Business Email</td>

<td>{{ $data['email'] }}</td>

</tr>

<tr>

<td class="label">Website</td>

<td>{{ $data['website'] }}</td>

</tr>

</table>

<div class="message">

<strong>Project Details</strong>

<br><br>

{{ $data['message'] }}

</div>

</div>

<div class="footer">

Advertex Contact Form

</div>

</div>

</body>
</html>