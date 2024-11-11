<?php 

$quotes = [
    [
        'author' => 'Abraham Lincoln',
        'text'   => 'I have a dream that my four little children will one day live in a nation where they will not be judged by the color of their skin but by the content of their character.'
    ],
    [
        'author' => 'Albert Einstein',
        'text'   => 'Life is like riding a bicycle. To keep your balance, you must keep moving.'
    ],
    [
        'author' => 'Mahatma Gandhi',
        'text'   => 'Be the change that you wish to see in the world.'
    ],
    [
        'author' => 'Confucius',
        'text'   => 'It does not matter how slowly you go as long as you do not stop.'
    ],
    [
        'author' => 'Walt Disney',
        'text'   => 'The way to get started is to quit talking and begin doing.'
    ],
    [
        'author' => 'Eleanor Roosevelt',
        'text'   => 'The future belongs to those who believe in the beauty of their dreams.'
    ],
    [
        'author' => 'John F. Kennedy',
        'text'   => 'Ask not what your country can do for you – ask what you can do for your country.'
    ],
    [
        'author' => 'Winston Churchill',
        'text'   => 'Success is not final, failure is not fatal: It is the courage to continue that counts.'
    ],
    [
        'author' => 'Nelson Mandela',
        'text'   => 'It always seems impossible until it is done.'
    ],
    [
        'author' => 'Martin Luther King Jr.',
        'text'   => 'Faith is taking the first step even when you don’t see the whole staircase.'
    ],
    [
        'author' => 'Steve Jobs',
        'text'   => 'The only way to do great work is to love what you do.'
    ],
    [
        'author' => 'Ralph Waldo Emerson',
        'text'   => 'To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.'
    ],
    [
        'author' => 'Oscar Wilde',
        'text'   => 'Be yourself; everyone else is already taken.'
    ],
    [
        'author' => 'Mark Twain',
        'text'   => 'The secret of getting ahead is getting started.'
    ],
    [
        'author' => 'Vincent Van Gogh',
        'text'   => 'If you hear a voice within you say "you cannot paint," then by all means paint, and that voice will be silenced.'
    ],
    [
        'author' => 'Helen Keller',
        'text'   => 'The only thing worse than being blind is having sight but no vision.'
    ],
    [
        'author' => 'Mother Teresa',
        'text'   => 'Spread love everywhere you go. Let no one ever come to you without leaving happier.'
    ],
    [
        'author' => 'Charles Dickens',
        'text'   => 'Have a heart that never hardens, and a temper that never tires, and a touch that never hurts.'
    ],
    [
        'author' => 'Anne Frank',
        'text'   => 'How wonderful it is that nobody need wait a single moment before starting to improve the world.'
    ],
    [
        'author' => 'J.K. Rowling',
        'text'   => 'It is our choices that show what we truly are, far more than our abilities.'
    ],
    [
        'author' => 'Henry Ford',
        'text'   => 'Whether you think you can or you think you can’t, you’re right.'
    ],
    [
        'author' => 'Confucius',
        'text'   => 'Our greatest glory is not in never falling, but in rising every time we fall.'
    ],
    [
        'author' => 'Theodore Roosevelt',
        'text'   => 'Believe you can and you’re halfway there.'
    ],
    [
        'author' => 'Aldous Huxley',
        'text'   => 'Experience is not what happens to you; it is what you do with what happens to you.'
    ],
    [
        'author' => 'Aristotle',
        'text'   => 'The more you know, the more you realize you don’t know.'
    ],
    [
        'author' => 'Buddha',
        'text'   => 'The mind is everything. What you think you become.'
    ],
    [
        'author' => 'Lao Tzu',
        'text'   => 'A journey of a thousand miles begins with a single step.'
    ],
    [
        'author' => 'Benjamin Franklin',
        'text'   => 'Tell me and I forget, teach me and I may remember, involve me and I learn.'
    ],
    [
        'author' => 'Socrates',
        'text'   => 'The only true wisdom is in knowing you know nothing.'
    ],
    [
        'author' => 'Leonardo da Vinci',
        'text'   => 'Simplicity is the ultimate sophistication.'
    ]
];

$quote       = $quotes[rand(0, count($quotes) - 1)];
$quoteText   = $quote['text'];
$quoteAuthor = $quote['author'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Quote Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css">
    <style>
        /* Optional custom styling for button */
        .refresh-button {
            transition: transform 0.2s; 
            width: 35px;
            height: 35px;
            border-radius: 50px;
        }
        .refresh-button:hover {
            transform: rotate(90deg) scale(1.1);
        }

        .icon {
            font-size: 15px;
            margin: 0 auto;
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Quote Container -->
    <div class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg border border-gray-200 relative">
        <blockquote class="text-center mb-6">
            <h1 class="text-xl md:text-2xl font-semibold text-gray-800 mb-4 italic">
                &ldquo;<?= $quoteText ?>&rdquo;
            </h1>
            <p class="text-lg font-medium text-gray-500">__<?= $quoteAuthor ?></p>
        </blockquote>
        
        <!-- Refresh Button -->
        <button onclick="window.location.reload();" 
                class="refresh-button absolute top-2 right-2 bg-gray-200 text-gray-600 p-2 rounded-full hover:bg-gray-300 focus:outline-none">
                <i class="ri-refresh-line icon"></i>
            </svg>
        </button>
    </div>

</body>
</html>
