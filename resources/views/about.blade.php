<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-col">
    <div class="lg:w-4/6 mx-auto">
      <div class="rounded-lg h-64 overflow-hidden">
        <img alt="content" class="object-cover object-center h-full w-full" src="../storage/img/IMG_0370.jpeg">
      </div>
      <div class="flex flex-col sm:flex-row mt-10">
        <div class="sm:w-1/3 text-center sm:pr-8 sm:py-8">
          <div class="w-20 h-20 rounded-full inline-flex items-center justify-center bg-gray-200 text-gray-400">
          <img alt="team" class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="../storage/img/IMG_1571.PNG">
          <!-- <img fill="none" src="../public/pug.png" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
              <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle> -->
            <!-- </svg> -->
          </div>
          <div class="flex flex-col items-center text-center justify-center">
            <h2 class="font-medium title-font mt-4 text-gray-900 text-lg">元村　直美</h2>
            <div class="w-12 h-1 bg-indigo-500 rounded mt-2 mb-4"></div>
            <p class="text-base">自己紹介</p>
          </div>
        </div>
        <div class="sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l border-gray-200 sm:border-t-0 border-t mt-4 pt-4 sm:mt-0 text-center sm:text-left">
          <p class="leading-relaxed text-lg mb-4">趣味は旅行、食べ歩きとカメラ、ダイビングです。
            アフリカ、北米、南米、アジアを含む<br>約20カ国を旅しました。カメラはNikonD5300を所有。<br>スポーツはバスケットボールが好きでNBAチェックします。</p>
          <!-- <a class="text-indigo-500 inline-flex items-center">Learn More -->
            <!-- <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg> -->
          </a>
        </div>
      </div>
    </div>
    <div class="m-10 text-center bg-gray-200">
      <button type="button" onClick="history.back()" class="bg-blue-500 text-white px-4 py-2 rounded-full w-32 hover:bg-blue-700 transform scale-105 focus:outline-none">戻る</button>
    </div>
</div>
  </div>
</section>

</body>
</html>
