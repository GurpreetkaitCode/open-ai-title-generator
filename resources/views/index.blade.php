<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind Search Example</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-200">
<div class="container mx-auto py-8">
    <div class="w-full max-w-md mx-auto">
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="search-input">
                    Search:
                </label>
                <input class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="search-input" type="text" placeholder="Enter your search query here" style="margin-top: 50px;">
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button" id="search-btn">
                    Search
                </button>
            </div>
        </form>
        <div id="search-results" class="hidden">
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <h2 class="text-gray-700 font-bold mb-2">Search Results:</h2>
                <div id="result-1" class="result mb-2"></div>
                <div id="result-2" class="result mb-2"></div>
                <div id="result-3" class="result mb-2"></div>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4" type="button" id="copy-btn">
                    Copy Results
                </button>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("search-btn").addEventListener("click", function() {
        const query = document.getElementById("search-input").value;
        if (query.trim() !== "") {
            document.getElementById("result-1").innerHTML = "Result 1 for \"" + query + "\"";
            document.getElementById("result-2").innerHTML = "Result 2 for \"" + query + "\"";
            document.getElementById("result-3").innerHTML = "Result 3 for \"" + query + "\"";
            document.getElementById("search-results").classList.remove("hidden");
        }
    });

    document.getElementById("copy-btn").addEventListener("click", function() {
        const results = document.getElementById("search-results").textContent;
        navigator.clipboard.writeText(results).then(function() {
            alert("Search results copied to clipboard!");
        }, function() {
            alert("Error copying search results to clipboard!");
        });
    });
</script>
</body>
</html>
