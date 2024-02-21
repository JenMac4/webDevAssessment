<?php

    //REDIRECT USER TO LOGIN PAGE AFTER SIX SECONDS
    header("refresh:6;url=login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/stylesheets/style.css">

</head>
<body>


<section id="redirect-container">

    
    <!-- SVG GRAPHICS -->
    <svg width="1004" height="127" viewBox="0 0 1004 127" fill="none" xmlns="http://www.w3.org/2000/svg" id="logo">
        <path d="M991.868 0.927979H1003.77V100H991.868V0.927979Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M938.761 102.048C933.982 102.048 930.014 100.597 926.857 97.696C923.785 94.7093 922.164 90.8693 921.993 86.176V47.008H933.897V81.952C934.068 84.8533 934.878 87.2 936.329 88.992C937.865 90.784 940.254 91.7227 943.497 91.808C946.484 91.808 949.129 90.9547 951.433 89.248C953.822 87.456 955.742 85.0667 957.193 82.08C958.644 79.008 959.369 75.552 959.369 71.712V47.008H971.273V100H960.393L959.369 86.944L960.009 89.248C958.985 91.7227 957.406 93.9413 955.273 95.904C953.225 97.7813 950.793 99.2747 947.977 100.384C945.161 101.493 942.089 102.048 938.761 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M877.845 100V57.632H868.757V47.008H877.845V24.608C877.845 16.928 879.552 11.04 882.965 6.94398C886.464 2.84799 891.584 0.799988 898.325 0.799988C900.117 0.799988 902.08 1.05599 904.213 1.56799C906.432 2.07999 908.352 2.93332 909.973 4.12799L904.981 12.704C904.213 11.936 903.36 11.424 902.421 11.168C901.482 10.8267 900.544 10.656 899.605 10.656C896.448 10.656 894.016 11.7227 892.309 13.856C890.602 15.9893 889.749 19.616 889.749 24.736V47.008H906.517V57.632H889.749V100H877.845Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M836.216 101.024C832.461 101.024 828.792 100.384 825.208 99.104C821.709 97.7387 818.808 95.7333 816.504 93.088L821.496 86.176C823.715 88.3093 825.976 89.9307 828.28 91.04C830.669 92.064 833.016 92.576 835.32 92.576C837.027 92.576 838.605 92.3627 840.056 91.936C841.507 91.5093 842.659 90.8267 843.512 89.888C844.451 88.864 844.92 87.4987 844.92 85.792C844.92 83.9147 844.28 82.4213 843 81.312C841.805 80.2027 840.227 79.3067 838.264 78.624C836.387 77.9413 834.381 77.3013 832.248 76.704C827.896 75.2533 824.568 73.248 822.264 70.688C819.96 68.128 818.808 65.0133 818.808 61.344C818.808 58.528 819.491 55.9253 820.856 53.536C822.307 51.0613 824.397 49.056 827.128 47.52C829.944 45.984 833.4 45.216 837.496 45.216C841.165 45.216 844.451 45.6853 847.352 46.624C850.253 47.4773 852.984 48.928 855.544 50.976L850.808 58.4C849.272 56.7787 847.437 55.584 845.304 54.816C843.171 54.048 841.251 53.6213 839.544 53.536C838.093 53.4507 836.685 53.664 835.32 54.176C834.04 54.688 832.973 55.4133 832.12 56.352C831.267 57.2907 830.84 58.4 830.84 59.68C830.84 61.472 831.437 62.9227 832.632 64.032C833.827 65.1413 835.363 66.0373 837.24 66.72C839.203 67.3173 841.123 67.9573 843 68.64C845.645 69.408 847.992 70.432 850.04 71.712C852.088 72.992 853.709 74.5707 854.904 76.448C856.184 78.3253 856.824 80.672 856.824 83.488C856.824 86.6453 856.056 89.5893 854.52 92.32C853.069 94.9653 850.808 97.0987 847.736 98.72C844.749 100.256 840.909 101.024 836.216 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M784.091 101.024C780.336 101.024 776.667 100.384 773.083 99.104C769.584 97.7387 766.683 95.7333 764.379 93.088L769.371 86.176C771.59 88.3093 773.851 89.9307 776.155 91.04C778.544 92.064 780.891 92.576 783.195 92.576C784.902 92.576 786.48 92.3627 787.931 91.936C789.382 91.5093 790.534 90.8267 791.387 89.888C792.326 88.864 792.795 87.4987 792.795 85.792C792.795 83.9147 792.155 82.4213 790.875 81.312C789.68 80.2027 788.102 79.3067 786.139 78.624C784.262 77.9413 782.256 77.3013 780.123 76.704C775.771 75.2533 772.443 73.248 770.139 70.688C767.835 68.128 766.683 65.0133 766.683 61.344C766.683 58.528 767.366 55.9253 768.731 53.536C770.182 51.0613 772.272 49.056 775.003 47.52C777.819 45.984 781.275 45.216 785.371 45.216C789.04 45.216 792.326 45.6853 795.227 46.624C798.128 47.4773 800.859 48.928 803.419 50.976L798.683 58.4C797.147 56.7787 795.312 55.584 793.179 54.816C791.046 54.048 789.126 53.6213 787.419 53.536C785.968 53.4507 784.56 53.664 783.195 54.176C781.915 54.688 780.848 55.4133 779.995 56.352C779.142 57.2907 778.715 58.4 778.715 59.68C778.715 61.472 779.312 62.9227 780.507 64.032C781.702 65.1413 783.238 66.0373 785.115 66.72C787.078 67.3173 788.998 67.9573 790.875 68.64C793.52 69.408 795.867 70.432 797.915 71.712C799.963 72.992 801.584 74.5707 802.779 76.448C804.059 78.3253 804.699 80.672 804.699 83.488C804.699 86.6453 803.931 89.5893 802.395 92.32C800.944 94.9653 798.683 97.0987 795.611 98.72C792.624 100.256 788.784 101.024 784.091 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M727.319 101.28C721.26 101.28 716.055 100.085 711.703 97.696C707.351 95.2213 703.98 91.8933 701.591 87.712C699.287 83.4453 698.135 78.5813 698.135 73.12C698.135 67.9147 699.458 63.1787 702.103 58.912C704.748 54.6453 708.29 51.232 712.727 48.672C717.164 46.112 722.114 44.832 727.575 44.832C734.572 44.832 740.375 46.88 744.983 50.976C749.591 55.072 752.706 60.704 754.327 67.872L710.679 83.232L707.863 76.192L743.703 63.136L741.143 64.8C740.119 61.984 738.412 59.552 736.023 57.504C733.634 55.3707 730.519 54.304 726.679 54.304C723.436 54.304 720.535 55.1147 717.975 56.736C715.415 58.272 713.41 60.4053 711.959 63.136C710.508 65.8667 709.783 68.9813 709.783 72.48C709.783 76.1493 710.551 79.392 712.087 82.208C713.623 84.9387 715.714 87.1147 718.359 88.736C721.09 90.272 724.162 91.04 727.575 91.04C729.879 91.04 732.098 90.6133 734.231 89.76C736.45 88.9067 738.498 87.7973 740.375 86.432L745.879 95.264C743.234 97.056 740.247 98.5067 736.919 99.616C733.676 100.725 730.476 101.28 727.319 101.28Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M687.376 95.136C684.987 97.0133 682.128 98.5067 678.8 99.616C675.472 100.725 672.144 101.28 668.816 101.28C663.013 101.28 657.936 100.128 653.584 97.824C649.232 95.52 645.819 92.32 643.344 88.224C640.955 84.0427 639.76 79.136 639.76 73.504C639.76 67.872 641.04 62.9653 643.6 58.784C646.245 54.6027 649.659 51.4027 653.84 49.184C658.107 46.88 662.672 45.728 667.536 45.728C671.803 45.728 675.6 46.3253 678.928 47.52C682.341 48.7147 685.243 50.336 687.632 52.384L681.744 60.064C680.208 58.8693 678.331 57.8027 676.112 56.864C673.893 55.9253 671.376 55.456 668.56 55.456C665.488 55.456 662.629 56.2667 659.984 57.888C657.424 59.424 655.376 61.5573 653.84 64.288C652.389 67.0187 651.664 70.0907 651.664 73.504C651.664 76.7467 652.432 79.776 653.968 82.592C655.504 85.3227 657.637 87.4987 660.368 89.12C663.099 90.656 666.213 91.424 669.712 91.424C672.016 91.424 674.107 91.0827 675.984 90.4C677.947 89.7173 679.696 88.7787 681.232 87.584L687.376 95.136Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M629.001 95.136C626.612 97.0133 623.753 98.5067 620.425 99.616C617.097 100.725 613.769 101.28 610.441 101.28C604.638 101.28 599.561 100.128 595.209 97.824C590.857 95.52 587.444 92.32 584.969 88.224C582.58 84.0427 581.385 79.136 581.385 73.504C581.385 67.872 582.665 62.9653 585.225 58.784C587.87 54.6027 591.284 51.4027 595.465 49.184C599.732 46.88 604.297 45.728 609.161 45.728C613.428 45.728 617.225 46.3253 620.553 47.52C623.966 48.7147 626.868 50.336 629.257 52.384L623.369 60.064C621.833 58.8693 619.956 57.8027 617.737 56.864C615.518 55.9253 613.001 55.456 610.185 55.456C607.113 55.456 604.254 56.2667 601.609 57.888C599.049 59.424 597.001 61.5573 595.465 64.288C594.014 67.0187 593.289 70.0907 593.289 73.504C593.289 76.7467 594.057 79.776 595.593 82.592C597.129 85.3227 599.262 87.4987 601.993 89.12C604.724 90.656 607.838 91.424 611.337 91.424C613.641 91.424 615.732 91.0827 617.609 90.4C619.572 89.7173 621.321 88.7787 622.857 87.584L629.001 95.136Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M532.886 102.048C528.107 102.048 524.139 100.597 520.982 97.696C517.91 94.7093 516.289 90.8693 516.118 86.176V47.008H528.022V81.952C528.193 84.8533 529.003 87.2 530.454 88.992C531.99 90.784 534.379 91.7227 537.622 91.808C540.609 91.808 543.254 90.9547 545.558 89.248C547.947 87.456 549.867 85.0667 551.318 82.08C552.769 79.008 553.494 75.552 553.494 71.712V47.008H565.398V100H554.518L553.494 86.944L554.134 89.248C553.11 91.7227 551.531 93.9413 549.398 95.904C547.35 97.7813 544.918 99.2747 542.102 100.384C539.286 101.493 536.214 102.048 532.886 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M478.841 101.024C475.086 101.024 471.417 100.384 467.833 99.104C464.334 97.7387 461.433 95.7333 459.129 93.088L464.121 86.176C466.34 88.3093 468.601 89.9307 470.905 91.04C473.294 92.064 475.641 92.576 477.945 92.576C479.652 92.576 481.23 92.3627 482.681 91.936C484.132 91.5093 485.284 90.8267 486.137 89.888C487.076 88.864 487.545 87.4987 487.545 85.792C487.545 83.9147 486.905 82.4213 485.625 81.312C484.43 80.2027 482.852 79.3067 480.889 78.624C479.012 77.9413 477.006 77.3013 474.873 76.704C470.521 75.2533 467.193 73.248 464.889 70.688C462.585 68.128 461.433 65.0133 461.433 61.344C461.433 58.528 462.116 55.9253 463.481 53.536C464.932 51.0613 467.022 49.056 469.753 47.52C472.569 45.984 476.025 45.216 480.121 45.216C483.79 45.216 487.076 45.6853 489.977 46.624C492.878 47.4773 495.609 48.928 498.169 50.976L493.433 58.4C491.897 56.7787 490.062 55.584 487.929 54.816C485.796 54.048 483.876 53.6213 482.169 53.536C480.718 53.4507 479.31 53.664 477.945 54.176C476.665 54.688 475.598 55.4133 474.745 56.352C473.892 57.2907 473.465 58.4 473.465 59.68C473.465 61.472 474.062 62.9227 475.257 64.032C476.452 65.1413 477.988 66.0373 479.865 66.72C481.828 67.3173 483.748 67.9573 485.625 68.64C488.27 69.408 490.617 70.432 492.665 71.712C494.713 72.992 496.334 74.5707 497.529 76.448C498.809 78.3253 499.449 80.672 499.449 83.488C499.449 86.6453 498.681 89.5893 497.145 92.32C495.694 94.9653 493.433 97.0987 490.361 98.72C487.374 100.256 483.534 101.024 478.841 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M378.85 101.28C374.839 101.28 370.957 100.341 367.202 98.464C363.533 96.5867 360.674 94.0693 358.626 90.912L359.394 87.2V125.472H347.618V46.24H357.858L359.522 59.808L358.242 56.096C360.802 52.8533 364.045 50.1653 367.97 48.032C371.895 45.8987 376.29 44.832 381.154 44.832C386.103 44.832 390.541 46.0267 394.466 48.416C398.477 50.8053 401.634 54.1333 403.938 58.4C406.242 62.6667 407.394 67.6587 407.394 73.376C407.394 79.0933 406.157 84.0427 403.682 88.224C401.207 92.4053 397.794 95.648 393.442 97.952C389.175 100.171 384.311 101.28 378.85 101.28ZM376.546 91.808C379.959 91.808 383.074 91.04 385.89 89.504C388.791 87.8827 391.095 85.7067 392.802 82.976C394.509 80.16 395.362 77.0027 395.362 73.504C395.362 69.92 394.551 66.7627 392.93 64.032C391.309 61.216 389.133 58.9973 386.402 57.376C383.757 55.7547 380.77 54.944 377.442 54.944C374.37 54.944 371.597 55.5413 369.122 56.736C366.647 57.9307 364.599 59.5947 362.978 61.728C361.357 63.776 360.205 66.1653 359.522 68.896V77.728C359.949 80.4587 360.973 82.8907 362.594 85.024C364.215 87.1573 366.221 88.8213 368.61 90.016C371.085 91.2107 373.73 91.808 376.546 91.808Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M294.511 102.048C289.732 102.048 285.764 100.597 282.607 97.696C279.535 94.7093 277.914 90.8693 277.743 86.176V47.008H289.647V81.952C289.818 84.8533 290.628 87.2 292.079 88.992C293.615 90.784 296.004 91.7227 299.247 91.808C302.234 91.808 304.879 90.9547 307.183 89.248C309.572 87.456 311.492 85.0667 312.943 82.08C314.394 79.008 315.119 75.552 315.119 71.712V47.008H327.023V100H316.143L315.119 86.944L315.759 89.248C314.735 91.7227 313.156 93.9413 311.023 95.904C308.975 97.7813 306.543 99.2747 303.727 100.384C300.911 101.493 297.839 102.048 294.511 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M177.117 47.008L178.141 59.936L177.629 57.888C179.336 53.9627 182.109 50.848 185.949 48.544C189.789 46.1547 194.226 44.96 199.261 44.96C204.296 44.96 208.392 46.4533 211.549 49.44C214.792 52.3413 216.456 56.1387 216.541 60.832V100H204.509V65.056C204.424 62.1547 203.57 59.808 201.949 58.016C200.413 56.1387 197.981 55.2 194.653 55.2C191.581 55.2 188.808 56.0533 186.333 57.76C183.858 59.4667 181.896 61.8133 180.445 64.8C179.08 67.7867 178.397 71.2427 178.397 75.168V100H166.493V47.008H177.117Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M115.465 126.24C111.54 126.24 108.084 125.771 105.097 124.832C102.11 123.979 99.3797 122.741 96.905 121.12C94.5157 119.499 92.2117 117.664 89.993 115.616L96.905 107.552C99.721 110.197 102.58 112.245 105.481 113.696C108.382 115.147 111.625 115.872 115.209 115.872C119.22 115.872 122.59 115.189 125.321 113.824C128.137 112.544 130.27 110.709 131.721 108.32C133.172 106.016 133.897 103.328 133.897 100.256L134.025 85.92L135.049 88.224C133.513 91.8933 130.74 95.008 126.729 97.568C122.718 100.043 117.854 101.28 112.137 101.28C107.273 101.28 102.793 100.043 98.697 97.568C94.6863 95.0933 91.4437 91.7653 88.969 87.584C86.5797 83.3173 85.385 78.5387 85.385 73.248C85.385 67.7013 86.665 62.8373 89.225 58.656C91.785 54.3893 95.1557 51.0187 99.337 48.544C103.518 46.0693 108.084 44.832 113.033 44.832C117.726 44.832 121.993 45.8133 125.833 47.776C129.758 49.6533 132.617 52.0853 134.409 55.072L133.769 57.248L135.049 47.008H145.929V100.384C145.929 105.163 144.692 109.515 142.217 113.44C139.742 117.365 136.244 120.48 131.721 122.784C127.198 125.088 121.78 126.24 115.465 126.24ZM97.289 72.992C97.289 76.4053 98.0997 79.52 99.721 82.336C101.342 85.152 103.518 87.3707 106.249 88.992C109.065 90.6133 112.18 91.424 115.593 91.424C118.75 91.424 121.566 90.8693 124.041 89.76C126.601 88.5653 128.734 86.9867 130.441 85.024C132.148 82.976 133.342 80.6293 134.025 77.984V67.488C133.257 64.928 131.977 62.7093 130.185 60.832C128.393 58.8693 126.26 57.376 123.785 56.352C121.31 55.2427 118.58 54.688 115.593 54.688C112.18 54.688 109.065 55.456 106.249 56.992C103.518 58.528 101.342 60.704 99.721 63.52C98.0997 66.2507 97.289 69.408 97.289 72.992Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M57.493 47.008H69.397V100H57.493V47.008ZM56.597 27.808C56.597 25.9306 57.3223 24.352 58.773 23.072C60.309 21.792 61.973 21.152 63.765 21.152C65.557 21.152 67.1357 21.792 68.501 23.072C69.9517 24.352 70.677 25.9306 70.677 27.808C70.677 29.7707 69.9517 31.392 68.501 32.672C67.1357 33.8666 65.557 34.464 63.765 34.464C61.973 34.464 60.309 33.824 58.773 32.544C57.3223 31.264 56.597 29.6853 56.597 27.808Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M20.216 101.024C16.4613 101.024 12.792 100.384 9.208 99.104C5.70933 97.7387 2.808 95.7333 0.503998 93.088L5.496 86.176C7.71466 88.3093 9.976 89.9307 12.28 91.04C14.6693 92.064 17.016 92.576 19.32 92.576C21.0267 92.576 22.6053 92.3627 24.056 91.936C25.5067 91.5093 26.6587 90.8267 27.512 89.888C28.4507 88.864 28.92 87.4987 28.92 85.792C28.92 83.9147 28.28 82.4213 27 81.312C25.8053 80.2027 24.2267 79.3067 22.264 78.624C20.3867 77.9413 18.3813 77.3013 16.248 76.704C11.896 75.2533 8.568 73.248 6.264 70.688C3.96 68.128 2.808 65.0133 2.808 61.344C2.808 58.528 3.49066 55.9253 4.856 53.536C6.30666 51.0613 8.39733 49.056 11.128 47.52C13.944 45.984 17.4 45.216 21.496 45.216C25.1653 45.216 28.4507 45.6853 31.352 46.624C34.2533 47.4773 36.984 48.928 39.544 50.976L34.808 58.4C33.272 56.7787 31.4373 55.584 29.304 54.816C27.1707 54.048 25.2507 53.6213 23.544 53.536C22.0933 53.4507 20.6853 53.664 19.32 54.176C18.04 54.688 16.9733 55.4133 16.12 56.352C15.2667 57.2907 14.84 58.4 14.84 59.68C14.84 61.472 15.4373 62.9227 16.632 64.032C17.8267 65.1413 19.3627 66.0373 21.24 66.72C23.2027 67.3173 25.1227 67.9573 27 68.64C29.6453 69.408 31.992 70.432 34.04 71.712C36.088 72.992 37.7093 74.5707 38.904 76.448C40.184 78.3253 40.824 80.672 40.824 83.488C40.824 86.6453 40.056 89.5893 38.52 92.32C37.0693 94.9653 34.808 97.0987 31.736 98.72C28.7493 100.256 24.9093 101.024 20.216 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
    </svg>
    
    <svg width="1004" height="127" viewBox="0 0 1004 127" fill="#FAF9F6" xmlns="http://www.w3.org/2000/svg" id="logo-fade">
        <path d="M991.868 0.927979H1003.77V100H991.868V0.927979Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M938.761 102.048C933.982 102.048 930.014 100.597 926.857 97.696C923.785 94.7093 922.164 90.8693 921.993 86.176V47.008H933.897V81.952C934.068 84.8533 934.878 87.2 936.329 88.992C937.865 90.784 940.254 91.7227 943.497 91.808C946.484 91.808 949.129 90.9547 951.433 89.248C953.822 87.456 955.742 85.0667 957.193 82.08C958.644 79.008 959.369 75.552 959.369 71.712V47.008H971.273V100H960.393L959.369 86.944L960.009 89.248C958.985 91.7227 957.406 93.9413 955.273 95.904C953.225 97.7813 950.793 99.2747 947.977 100.384C945.161 101.493 942.089 102.048 938.761 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M877.845 100V57.632H868.757V47.008H877.845V24.608C877.845 16.928 879.552 11.04 882.965 6.94398C886.464 2.84799 891.584 0.799988 898.325 0.799988C900.117 0.799988 902.08 1.05599 904.213 1.56799C906.432 2.07999 908.352 2.93332 909.973 4.12799L904.981 12.704C904.213 11.936 903.36 11.424 902.421 11.168C901.482 10.8267 900.544 10.656 899.605 10.656C896.448 10.656 894.016 11.7227 892.309 13.856C890.602 15.9893 889.749 19.616 889.749 24.736V47.008H906.517V57.632H889.749V100H877.845Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M836.216 101.024C832.461 101.024 828.792 100.384 825.208 99.104C821.709 97.7387 818.808 95.7333 816.504 93.088L821.496 86.176C823.715 88.3093 825.976 89.9307 828.28 91.04C830.669 92.064 833.016 92.576 835.32 92.576C837.027 92.576 838.605 92.3627 840.056 91.936C841.507 91.5093 842.659 90.8267 843.512 89.888C844.451 88.864 844.92 87.4987 844.92 85.792C844.92 83.9147 844.28 82.4213 843 81.312C841.805 80.2027 840.227 79.3067 838.264 78.624C836.387 77.9413 834.381 77.3013 832.248 76.704C827.896 75.2533 824.568 73.248 822.264 70.688C819.96 68.128 818.808 65.0133 818.808 61.344C818.808 58.528 819.491 55.9253 820.856 53.536C822.307 51.0613 824.397 49.056 827.128 47.52C829.944 45.984 833.4 45.216 837.496 45.216C841.165 45.216 844.451 45.6853 847.352 46.624C850.253 47.4773 852.984 48.928 855.544 50.976L850.808 58.4C849.272 56.7787 847.437 55.584 845.304 54.816C843.171 54.048 841.251 53.6213 839.544 53.536C838.093 53.4507 836.685 53.664 835.32 54.176C834.04 54.688 832.973 55.4133 832.12 56.352C831.267 57.2907 830.84 58.4 830.84 59.68C830.84 61.472 831.437 62.9227 832.632 64.032C833.827 65.1413 835.363 66.0373 837.24 66.72C839.203 67.3173 841.123 67.9573 843 68.64C845.645 69.408 847.992 70.432 850.04 71.712C852.088 72.992 853.709 74.5707 854.904 76.448C856.184 78.3253 856.824 80.672 856.824 83.488C856.824 86.6453 856.056 89.5893 854.52 92.32C853.069 94.9653 850.808 97.0987 847.736 98.72C844.749 100.256 840.909 101.024 836.216 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M784.091 101.024C780.336 101.024 776.667 100.384 773.083 99.104C769.584 97.7387 766.683 95.7333 764.379 93.088L769.371 86.176C771.59 88.3093 773.851 89.9307 776.155 91.04C778.544 92.064 780.891 92.576 783.195 92.576C784.902 92.576 786.48 92.3627 787.931 91.936C789.382 91.5093 790.534 90.8267 791.387 89.888C792.326 88.864 792.795 87.4987 792.795 85.792C792.795 83.9147 792.155 82.4213 790.875 81.312C789.68 80.2027 788.102 79.3067 786.139 78.624C784.262 77.9413 782.256 77.3013 780.123 76.704C775.771 75.2533 772.443 73.248 770.139 70.688C767.835 68.128 766.683 65.0133 766.683 61.344C766.683 58.528 767.366 55.9253 768.731 53.536C770.182 51.0613 772.272 49.056 775.003 47.52C777.819 45.984 781.275 45.216 785.371 45.216C789.04 45.216 792.326 45.6853 795.227 46.624C798.128 47.4773 800.859 48.928 803.419 50.976L798.683 58.4C797.147 56.7787 795.312 55.584 793.179 54.816C791.046 54.048 789.126 53.6213 787.419 53.536C785.968 53.4507 784.56 53.664 783.195 54.176C781.915 54.688 780.848 55.4133 779.995 56.352C779.142 57.2907 778.715 58.4 778.715 59.68C778.715 61.472 779.312 62.9227 780.507 64.032C781.702 65.1413 783.238 66.0373 785.115 66.72C787.078 67.3173 788.998 67.9573 790.875 68.64C793.52 69.408 795.867 70.432 797.915 71.712C799.963 72.992 801.584 74.5707 802.779 76.448C804.059 78.3253 804.699 80.672 804.699 83.488C804.699 86.6453 803.931 89.5893 802.395 92.32C800.944 94.9653 798.683 97.0987 795.611 98.72C792.624 100.256 788.784 101.024 784.091 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M727.319 101.28C721.26 101.28 716.055 100.085 711.703 97.696C707.351 95.2213 703.98 91.8933 701.591 87.712C699.287 83.4453 698.135 78.5813 698.135 73.12C698.135 67.9147 699.458 63.1787 702.103 58.912C704.748 54.6453 708.29 51.232 712.727 48.672C717.164 46.112 722.114 44.832 727.575 44.832C734.572 44.832 740.375 46.88 744.983 50.976C749.591 55.072 752.706 60.704 754.327 67.872L710.679 83.232L707.863 76.192L743.703 63.136L741.143 64.8C740.119 61.984 738.412 59.552 736.023 57.504C733.634 55.3707 730.519 54.304 726.679 54.304C723.436 54.304 720.535 55.1147 717.975 56.736C715.415 58.272 713.41 60.4053 711.959 63.136C710.508 65.8667 709.783 68.9813 709.783 72.48C709.783 76.1493 710.551 79.392 712.087 82.208C713.623 84.9387 715.714 87.1147 718.359 88.736C721.09 90.272 724.162 91.04 727.575 91.04C729.879 91.04 732.098 90.6133 734.231 89.76C736.45 88.9067 738.498 87.7973 740.375 86.432L745.879 95.264C743.234 97.056 740.247 98.5067 736.919 99.616C733.676 100.725 730.476 101.28 727.319 101.28Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M687.376 95.136C684.987 97.0133 682.128 98.5067 678.8 99.616C675.472 100.725 672.144 101.28 668.816 101.28C663.013 101.28 657.936 100.128 653.584 97.824C649.232 95.52 645.819 92.32 643.344 88.224C640.955 84.0427 639.76 79.136 639.76 73.504C639.76 67.872 641.04 62.9653 643.6 58.784C646.245 54.6027 649.659 51.4027 653.84 49.184C658.107 46.88 662.672 45.728 667.536 45.728C671.803 45.728 675.6 46.3253 678.928 47.52C682.341 48.7147 685.243 50.336 687.632 52.384L681.744 60.064C680.208 58.8693 678.331 57.8027 676.112 56.864C673.893 55.9253 671.376 55.456 668.56 55.456C665.488 55.456 662.629 56.2667 659.984 57.888C657.424 59.424 655.376 61.5573 653.84 64.288C652.389 67.0187 651.664 70.0907 651.664 73.504C651.664 76.7467 652.432 79.776 653.968 82.592C655.504 85.3227 657.637 87.4987 660.368 89.12C663.099 90.656 666.213 91.424 669.712 91.424C672.016 91.424 674.107 91.0827 675.984 90.4C677.947 89.7173 679.696 88.7787 681.232 87.584L687.376 95.136Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M629.001 95.136C626.612 97.0133 623.753 98.5067 620.425 99.616C617.097 100.725 613.769 101.28 610.441 101.28C604.638 101.28 599.561 100.128 595.209 97.824C590.857 95.52 587.444 92.32 584.969 88.224C582.58 84.0427 581.385 79.136 581.385 73.504C581.385 67.872 582.665 62.9653 585.225 58.784C587.87 54.6027 591.284 51.4027 595.465 49.184C599.732 46.88 604.297 45.728 609.161 45.728C613.428 45.728 617.225 46.3253 620.553 47.52C623.966 48.7147 626.868 50.336 629.257 52.384L623.369 60.064C621.833 58.8693 619.956 57.8027 617.737 56.864C615.518 55.9253 613.001 55.456 610.185 55.456C607.113 55.456 604.254 56.2667 601.609 57.888C599.049 59.424 597.001 61.5573 595.465 64.288C594.014 67.0187 593.289 70.0907 593.289 73.504C593.289 76.7467 594.057 79.776 595.593 82.592C597.129 85.3227 599.262 87.4987 601.993 89.12C604.724 90.656 607.838 91.424 611.337 91.424C613.641 91.424 615.732 91.0827 617.609 90.4C619.572 89.7173 621.321 88.7787 622.857 87.584L629.001 95.136Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M532.886 102.048C528.107 102.048 524.139 100.597 520.982 97.696C517.91 94.7093 516.289 90.8693 516.118 86.176V47.008H528.022V81.952C528.193 84.8533 529.003 87.2 530.454 88.992C531.99 90.784 534.379 91.7227 537.622 91.808C540.609 91.808 543.254 90.9547 545.558 89.248C547.947 87.456 549.867 85.0667 551.318 82.08C552.769 79.008 553.494 75.552 553.494 71.712V47.008H565.398V100H554.518L553.494 86.944L554.134 89.248C553.11 91.7227 551.531 93.9413 549.398 95.904C547.35 97.7813 544.918 99.2747 542.102 100.384C539.286 101.493 536.214 102.048 532.886 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M478.841 101.024C475.086 101.024 471.417 100.384 467.833 99.104C464.334 97.7387 461.433 95.7333 459.129 93.088L464.121 86.176C466.34 88.3093 468.601 89.9307 470.905 91.04C473.294 92.064 475.641 92.576 477.945 92.576C479.652 92.576 481.23 92.3627 482.681 91.936C484.132 91.5093 485.284 90.8267 486.137 89.888C487.076 88.864 487.545 87.4987 487.545 85.792C487.545 83.9147 486.905 82.4213 485.625 81.312C484.43 80.2027 482.852 79.3067 480.889 78.624C479.012 77.9413 477.006 77.3013 474.873 76.704C470.521 75.2533 467.193 73.248 464.889 70.688C462.585 68.128 461.433 65.0133 461.433 61.344C461.433 58.528 462.116 55.9253 463.481 53.536C464.932 51.0613 467.022 49.056 469.753 47.52C472.569 45.984 476.025 45.216 480.121 45.216C483.79 45.216 487.076 45.6853 489.977 46.624C492.878 47.4773 495.609 48.928 498.169 50.976L493.433 58.4C491.897 56.7787 490.062 55.584 487.929 54.816C485.796 54.048 483.876 53.6213 482.169 53.536C480.718 53.4507 479.31 53.664 477.945 54.176C476.665 54.688 475.598 55.4133 474.745 56.352C473.892 57.2907 473.465 58.4 473.465 59.68C473.465 61.472 474.062 62.9227 475.257 64.032C476.452 65.1413 477.988 66.0373 479.865 66.72C481.828 67.3173 483.748 67.9573 485.625 68.64C488.27 69.408 490.617 70.432 492.665 71.712C494.713 72.992 496.334 74.5707 497.529 76.448C498.809 78.3253 499.449 80.672 499.449 83.488C499.449 86.6453 498.681 89.5893 497.145 92.32C495.694 94.9653 493.433 97.0987 490.361 98.72C487.374 100.256 483.534 101.024 478.841 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M378.85 101.28C374.839 101.28 370.957 100.341 367.202 98.464C363.533 96.5867 360.674 94.0693 358.626 90.912L359.394 87.2V125.472H347.618V46.24H357.858L359.522 59.808L358.242 56.096C360.802 52.8533 364.045 50.1653 367.97 48.032C371.895 45.8987 376.29 44.832 381.154 44.832C386.103 44.832 390.541 46.0267 394.466 48.416C398.477 50.8053 401.634 54.1333 403.938 58.4C406.242 62.6667 407.394 67.6587 407.394 73.376C407.394 79.0933 406.157 84.0427 403.682 88.224C401.207 92.4053 397.794 95.648 393.442 97.952C389.175 100.171 384.311 101.28 378.85 101.28ZM376.546 91.808C379.959 91.808 383.074 91.04 385.89 89.504C388.791 87.8827 391.095 85.7067 392.802 82.976C394.509 80.16 395.362 77.0027 395.362 73.504C395.362 69.92 394.551 66.7627 392.93 64.032C391.309 61.216 389.133 58.9973 386.402 57.376C383.757 55.7547 380.77 54.944 377.442 54.944C374.37 54.944 371.597 55.5413 369.122 56.736C366.647 57.9307 364.599 59.5947 362.978 61.728C361.357 63.776 360.205 66.1653 359.522 68.896V77.728C359.949 80.4587 360.973 82.8907 362.594 85.024C364.215 87.1573 366.221 88.8213 368.61 90.016C371.085 91.2107 373.73 91.808 376.546 91.808Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M294.511 102.048C289.732 102.048 285.764 100.597 282.607 97.696C279.535 94.7093 277.914 90.8693 277.743 86.176V47.008H289.647V81.952C289.818 84.8533 290.628 87.2 292.079 88.992C293.615 90.784 296.004 91.7227 299.247 91.808C302.234 91.808 304.879 90.9547 307.183 89.248C309.572 87.456 311.492 85.0667 312.943 82.08C314.394 79.008 315.119 75.552 315.119 71.712V47.008H327.023V100H316.143L315.119 86.944L315.759 89.248C314.735 91.7227 313.156 93.9413 311.023 95.904C308.975 97.7813 306.543 99.2747 303.727 100.384C300.911 101.493 297.839 102.048 294.511 102.048Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M177.117 47.008L178.141 59.936L177.629 57.888C179.336 53.9627 182.109 50.848 185.949 48.544C189.789 46.1547 194.226 44.96 199.261 44.96C204.296 44.96 208.392 46.4533 211.549 49.44C214.792 52.3413 216.456 56.1387 216.541 60.832V100H204.509V65.056C204.424 62.1547 203.57 59.808 201.949 58.016C200.413 56.1387 197.981 55.2 194.653 55.2C191.581 55.2 188.808 56.0533 186.333 57.76C183.858 59.4667 181.896 61.8133 180.445 64.8C179.08 67.7867 178.397 71.2427 178.397 75.168V100H166.493V47.008H177.117Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M115.465 126.24C111.54 126.24 108.084 125.771 105.097 124.832C102.11 123.979 99.3797 122.741 96.905 121.12C94.5157 119.499 92.2117 117.664 89.993 115.616L96.905 107.552C99.721 110.197 102.58 112.245 105.481 113.696C108.382 115.147 111.625 115.872 115.209 115.872C119.22 115.872 122.59 115.189 125.321 113.824C128.137 112.544 130.27 110.709 131.721 108.32C133.172 106.016 133.897 103.328 133.897 100.256L134.025 85.92L135.049 88.224C133.513 91.8933 130.74 95.008 126.729 97.568C122.718 100.043 117.854 101.28 112.137 101.28C107.273 101.28 102.793 100.043 98.697 97.568C94.6863 95.0933 91.4437 91.7653 88.969 87.584C86.5797 83.3173 85.385 78.5387 85.385 73.248C85.385 67.7013 86.665 62.8373 89.225 58.656C91.785 54.3893 95.1557 51.0187 99.337 48.544C103.518 46.0693 108.084 44.832 113.033 44.832C117.726 44.832 121.993 45.8133 125.833 47.776C129.758 49.6533 132.617 52.0853 134.409 55.072L133.769 57.248L135.049 47.008H145.929V100.384C145.929 105.163 144.692 109.515 142.217 113.44C139.742 117.365 136.244 120.48 131.721 122.784C127.198 125.088 121.78 126.24 115.465 126.24ZM97.289 72.992C97.289 76.4053 98.0997 79.52 99.721 82.336C101.342 85.152 103.518 87.3707 106.249 88.992C109.065 90.6133 112.18 91.424 115.593 91.424C118.75 91.424 121.566 90.8693 124.041 89.76C126.601 88.5653 128.734 86.9867 130.441 85.024C132.148 82.976 133.342 80.6293 134.025 77.984V67.488C133.257 64.928 131.977 62.7093 130.185 60.832C128.393 58.8693 126.26 57.376 123.785 56.352C121.31 55.2427 118.58 54.688 115.593 54.688C112.18 54.688 109.065 55.456 106.249 56.992C103.518 58.528 101.342 60.704 99.721 63.52C98.0997 66.2507 97.289 69.408 97.289 72.992Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M57.493 47.008H69.397V100H57.493V47.008ZM56.597 27.808C56.597 25.9306 57.3223 24.352 58.773 23.072C60.309 21.792 61.973 21.152 63.765 21.152C65.557 21.152 67.1357 21.792 68.501 23.072C69.9517 24.352 70.677 25.9306 70.677 27.808C70.677 29.7707 69.9517 31.392 68.501 32.672C67.1357 33.8666 65.557 34.464 63.765 34.464C61.973 34.464 60.309 33.824 58.773 32.544C57.3223 31.264 56.597 29.6853 56.597 27.808Z" stroke="#FAF9F6" stroke-width="3"/>
        <path d="M20.216 101.024C16.4613 101.024 12.792 100.384 9.208 99.104C5.70933 97.7387 2.808 95.7333 0.503998 93.088L5.496 86.176C7.71466 88.3093 9.976 89.9307 12.28 91.04C14.6693 92.064 17.016 92.576 19.32 92.576C21.0267 92.576 22.6053 92.3627 24.056 91.936C25.5067 91.5093 26.6587 90.8267 27.512 89.888C28.4507 88.864 28.92 87.4987 28.92 85.792C28.92 83.9147 28.28 82.4213 27 81.312C25.8053 80.2027 24.2267 79.3067 22.264 78.624C20.3867 77.9413 18.3813 77.3013 16.248 76.704C11.896 75.2533 8.568 73.248 6.264 70.688C3.96 68.128 2.808 65.0133 2.808 61.344C2.808 58.528 3.49066 55.9253 4.856 53.536C6.30666 51.0613 8.39733 49.056 11.128 47.52C13.944 45.984 17.4 45.216 21.496 45.216C25.1653 45.216 28.4507 45.6853 31.352 46.624C34.2533 47.4773 36.984 48.928 39.544 50.976L34.808 58.4C33.272 56.7787 31.4373 55.584 29.304 54.816C27.1707 54.048 25.2507 53.6213 23.544 53.536C22.0933 53.4507 20.6853 53.664 19.32 54.176C18.04 54.688 16.9733 55.4133 16.12 56.352C15.2667 57.2907 14.84 58.4 14.84 59.68C14.84 61.472 15.4373 62.9227 16.632 64.032C17.8267 65.1413 19.3627 66.0373 21.24 66.72C23.2027 67.3173 25.1227 67.9573 27 68.64C29.6453 69.408 31.992 70.432 34.04 71.712C36.088 72.992 37.7093 74.5707 38.904 76.448C40.184 78.3253 40.824 80.672 40.824 83.488C40.824 86.6453 40.056 89.5893 38.52 92.32C37.0693 94.9653 34.808 97.0987 31.736 98.72C28.7493 100.256 24.9093 101.024 20.216 101.024Z" stroke="#FAF9F6" stroke-width="3"/>
    </svg>

</section>

    
</body>
<script src="../assets/jsScripts/redirect.js"></script>
</html>

