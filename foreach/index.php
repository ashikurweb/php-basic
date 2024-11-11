<?php
$topics = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'experiences' => [
            ['language' => 'Devops, Flutter, Kotlin'],
            ['language' => 'Python, Java, Ruby, Swift']
        ]
    ],
    [
        'id' => 2,
        'title' => 'Web Developer',
        'experiences' => [
            ['language' => 'React Js, Vue Js, Tailwind CSS'],
            ['language' => 'PHP, JavaScript, Node Js, .NET']
        ]
    ],
    [
        'id' => 3,
        'title' => 'Web Design',
        'experiences' => [
            ['language' => 'Figma, Photoshop, Wordpress, Framer, WebFlow'],
        ]
    ]
];

// foreach ( $topics as $topic ) {
//     echo '<h1>'. $topic['title'] .'</h1>';
//     foreach ( $topic['experiences'] as $experience ) {
//         echo '<p>'. $experience['language'] .'</p>';
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Open Sans', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f7f7f7;
        line-height: 1.6;
    }

    .container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .topic {
        margin-bottom: 20px;
    }

    .topic h1 {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #333;
    }

    .experience-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .experience-list li {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .experience-list li:last-child {
        border-bottom: none;
    }

    .experience-list li:hover {
        background-color: #f9f9f9;
    }

    .experience-list li::before {
        content: "\2022";
        font-size: 18px;
        color: #666;
        margin-right: 10px;
    }

    @media (max-width: 768px) {
        .container {
            margin: 20px auto;
        }
    }

    @media (max-width: 480px) {
        .container {
            margin: 10px auto;
        }

        .topic h1 {
            font-size: 18px;
        }
    }
</style>

<body>
    <div class="container">
        <?php foreach ($topics as $topic) : ?>
            <div class="topic">
                <h1><?= $topic['title'] ?></h1>
                <ul class="experience-list">
                    <?php foreach ($topic['experiences'] as $experience) : ?>
                        <li><?= $experience['language'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>