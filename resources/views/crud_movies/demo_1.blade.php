<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: #F05F73;

        }

        .titel {
            top: 50px;
            position: relative;
            margin: 0 auto;
            width: 50%;
            color: #fff;
        }

        .titel::before,
        .content::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;

        }

        .titel::before {
            border-left: 2px dotted #fff;
            left: 200px;
        }

        .content::before {
            border-left: 2px solid #fff;
            left: -100px;
        }


        .event {
            position: relative;
            margin-bottom: 50px;
        }

        .event_Ngay {
            position: absolute;
            top: 0;
            left: 0;
        }

        .event::before,
        .event::after {
            position: absolute;
            content: ' ';
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid #fff;
            left: 190px;
            background: #F05F73;
            z-index: 1;
        }

        .event_Gio {
            position: absolute;
            left: 0;
            bottom: 0;

        }

        .content {
            padding: 15px 20px;
            position: relative;
            width: 500px;
            margin-left: 300px;
            background: rgba(255, 255, 255, .2);
            border-radius: 10px
        }
    </style>
</head>

<body>
    <div class="titel">
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
        <div class="event">
            <div class="event_Ngay">22/02/2004</div>
            <div class="event_Gio">3:00 AM</div>
            <div class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea ullam maiores nemo,
                explicabo, quia quasi voluptatibus sequi ducimus minima quam quisquam pariatur blanditiis possimus,
                natus provident non veritatis reprehenderit vitae!</div>
        </div>
    </div>
</body>

</html>