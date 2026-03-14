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

    .project {
        background: #aacec598;
        padding: 5px 5px 5px 20px;
        border-radius: 10px;
        margin-bottom: 5px;
    }

    .project-link {
        display: inline-block;
        margin-right: 10px;
        margin-top: 10px;
        padding: 6px 12px;
        background: #333;
        color: white;
        text-decoration: none;
        border-radius: 4px;
        font-size: 14px;
    }

    .project-link:hover {
        background: #555;
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
            margin: 20px;
        }

        .header-box {
            flex-direction: column;
            text-align: center;
            gap: 10px;
        }

        .avatar {
            width: 95px;
            height: 95px;
        }

        .section h2 {
            font-size: 20px;
        }

        .skill,
        .skill-IT {
            font-size: 18px;
            padding: 5px 9px;
        }


        .project {
            padding: 20px;

        }

        .project ul {
            padding-left: 20px;
        }

        .project-link {
            display: block;
            width: fit-content;
            margin-bottom: 8px;
            font-size: 13px;
        }

    }

    @media (max-width: 480px) {

        .container {
            padding: 18px;
            margin: 10px;
        }

        h1 {
            font-size: 22px;
        }

        .section h2 {
            font-size: 18px;
        }

        .avatar {
            width: 80px;
            height: 80px;
        }

        ul {
            line-height: 1.6;
            font-size: 14px;
        }

        .skill,
        .skill-IT {
            font-size: 12px;
            padding: 4px 8px;
            margin: 4px;
        }

        .project {
            padding: 16px;
        }

        .project-link {
            padding: 7px 12px;
            font-size: 12px;
        }

    }
    </style>
</head>

<body>

    <div class="container">