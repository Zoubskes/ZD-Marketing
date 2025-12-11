<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>ZD Marketing</title>
</head>
<style>
    @keyframes fadeUp {
        0% {
            opacity: 0;
            transform: translateY(40px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fadeUp {
        animation: fadeUp 1.5s ease-out forwards;
    }

</style>

<body>
{{$slot}}
</body>
</html>
