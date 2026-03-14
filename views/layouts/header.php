<!DOCTYPE html>
<html lang="vi">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Du Anh Khoa - Portfolio</title>

    <style>
    body {
        font-family: Arial;
        margin: 0;
        background: #f4f4f4;
    }

    .header-box {
        display: flex;
        align-items: center;
    }

    .avatar {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        border: 3px solid #3498db;
    }

    .header-info {
        flex: 1;
        text-align: center;
    }

    .container {
        max-width: 1000px;
        margin: 40px auto;
        background: white;
        padding: 40px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    header {
        text-align: center;
        border-bottom: 2px solid #eee;
        padding-bottom: 20px;
    }

    h1 {
        margin: 0;
        color: #333;
    }

    .section {
        margin-top: 30px;
    }

    .section h2 {
        border-left: 5px solid #3498db;
        padding-left: 10px;
    }

    ul {
        line-height: 1.8;
    }

    .skill {
        display: inline-block;
        background: #3cd68e;
        color: white;
        padding: 6px 10px;
        margin: 5px;
        border-radius: 5px;
        font-size: 14px;
    }

    .skill-IT {
        display: inline-block;
        background: #3498db;
        color: white;
        padding: 6px 10px;
        margin: 5px;
        border-radius: 5px;
        font-size: 14px;
    }

    .contact {
        margin-top: 10px;
    }

    @media (max-width: 768px) {

        .container {
            padding: 20px;
        }

        .header-box {
            flex-direction: column;
            text-align: center;
        }

        .header-info {
            text-align: center;
        }

        .avatar {
            width: 90px;
            height: 90px;
        }

        .section h2 {
            font-size: 20px;
        }

        .skill .skill-IT {
            font-size: 12px;
            padding: 5px 8px;
        }


    }
    </style>
</head>

<body>

    <div class="container">