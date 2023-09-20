<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cifra Clube</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <style>
        :root {
            --maximum-blue-green_10: hsla(185, 75%, 45%, 0.1);
            --rich-black-fogra-29: hsl(0, 0%, 1%);
            --gray-x-11-gray: hsl(0, 0%, 74%);
            --oxford-blue_60: hsla(230, 41%, 14%, 0.6);
            --bittersweet: hsl(250, 84%, 62%);
            --smoky-black: rgb(7, 6, 1);
            --gainsboro: hsl(0, 0%, 88%);
            --black_90: hsla(0, 0%, 0%, 0.9);
            --cultured: hsl(200, 12%, 95%);
            --salmon: hsl(260, 72%, 45%);
            --white: hsl(0, 0%, 100%);
            --black: hsl(0, 0%, 0%);
            --onyx: hsl(0, 0%, 27%);
            --ff-roboto: 'Roboto', sans-serif;
            --ff-josefin-sans: 'Josefin Sans', sans-serif;
            --fs-1: 3rem;
            --fs-2: 2.6rem;
            --fs-3: 2.2rem;
            --fs-4: 2rem;
            --fs-5: 1.8rem;
            --fs-6: 1.6rem;
            --fs-7: 1.4rem;
            --fs-8: 1.2rem;
            --fw-300: 300;
            --fw-500: 500;
            --fw-600: 600;
            --fw-700: 700;
            --transition-1: 0.25s ease;
            --transition-2: 0.5s ease;
            --cubic-out: cubic-bezier(0.51, 0.03, 0.64, 0.28);
            --cubic-in: cubic-bezier(0.33, 0.85, 0.56, 1.02);
            --section-padding: 60px;
        }
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        a,
        img,
        span,
        table,
        tbody,
        button,
        ion-icon {
            display: block;
        }

        button,
        input {
            font: inherit;
            background: none;
            border: none;
        }

        input {
            width: 100%;
        }

        button {
            cursor: pointer;
        }

        address {
            font-style: normal;
            line-height: 1.8;
        }

        html {
            font-family: var(--ff-josefin-sans);
            font-size: 10px;
            scroll-behavior: smooth;
        }

        body {
            background: var(--white);
            font-size: 1.6rem;
            padding-block-start: 90px;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: hsl(0, 0%, 95%);
        }

        ::-webkit-scrollbar-thumb {
            background: hsl(0, 0%, 80%);
        }

        ::-webkit-scrollbar-thumb:hover {
            background: hsl(0, 0%, 70%);
        }

        .container {
            padding-inline: 15px;
        }

        .section {
            padding-block: var(--section-padding);
        }

        .h1,

        .h3,
        .h4 {
            color: var(--rich-black-fogra-29);
        }

        .h1 {
            font-size: var(--fs-1);
            font-weight: var(--fw-300);
            line-height: 1.5;
        }

        .h3 {
            font-size: var(--fs-4);
        }

        .h4 {
            font-size: var(--fs-5);
            text-transform: uppercase;
        }

        .btn {
            background: var(--background, var(--bittersweet));
            color: var(--color, var(--white));
            font-size: var(--fs-5);
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 14px 25px;
            border: 1px solid var(--border-color, var(--bittersweet));
        }

        .btn-primary:is(:hover, :focus) {
            --background: var(--salmon);
            --border-color: var(--salmon);
        }

        .btn-secondary {
            --background: transparent;
            --border-color: var(--black);
            --color: var(--black);
        }

        .btn-secondary:is(:hover, :focus) {
            --background: hsla(0, 0%, 0%, 0.1);
        }

        .has-scrollbar {
            display: flex;
            gap: 25px;
            overflow-x: auto;
            padding-bottom: 20px;
            scroll-snap-type: inline mandatory;
        }

        .has-scrollbar>li {
            min-width: 100%;
            scroll-snap-align: start;
        }

        .has-scrollbar::-webkit-scrollbar {
            height: 10px;
        }

        .has-scrollbar::-webkit-scrollbar-track {
            background: var(--white);
            border-radius: 20px;
            outline: 2px solid var(--bittersweet);
        }

        .has-scrollbar::-webkit-scrollbar-thumb {
            background: var(--bittersweet);
            border: 2px solid var(--white);
            border-radius: 20px;
        }

        .has-scrollbar::-webkit-scrollbar-button {
            width: calc(25% - 40px);
        }

        .card-banner {
            background: var(--cultured);
            position: relative;
            height: 350px;
            overflow: hidden;
        }

        .image-contain {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
            transition: var(--transition-2);
        }

        .product-card:is(:hover, :focus) .image-contain {
            transform: scale(1.1);
        }

        .card-badge {
            position: absolute;
            top: 20px;
            left: 20px;
            background: var(--bittersweet);
            color: var(--white);
            padding: 5px 15px;
            font-family: var(--ff-roboto);
            font-size: var(--fs-7);
            border-radius: 25px;
        }

        .card-action-list {
            position: absolute;
            top: 20px;
            right: -20px;
            opacity: 0;
            transition: var(--transition-1);
        }

        .product-card:is(:hover, :focus) .card-action-list {
            right: 20px;
            opacity: 1;
        }

        .card-action-item {
            position: relative;
        }

        .card-action-item:not(:last-child) {
            margin-bottom: 10px;
        }

        .card-action-btn {
            background: var(--white);
            color: var(--rich-black-fogra-29);
            font-size: 18px;
            padding: 10px;
            border-radius: 50%;
            transition: var(--transition-1);
        }

        .card-action-btn ion-icon {
            --ionicon-stroke-width: 30px;
        }

        .card-action-btn:is(:hover, :focus) {
            background: var(--bittersweet);
            color: var(--white);
        }

        .card-action-tooltip {
            position: absolute;
            top: 50%;
            right: calc(100% + 5px);
            transform: translateY(-50%);
            width: max-content;
            background: var(--black_90);
            color: var(--white);
            font-family: var(--ff-roboto);
            font-size: var(--fs-7);
            padding: 4px 8px;
            border-radius: 4px;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition-1);
        }

        .card-action-btn:is(:hover, :focus)+.card-action-tooltip {
            opacity: 1;
        }

        .card-content {
            padding: 24px 15px 0;
            text-align: center;
        }

        .card-cat {
            font-family: var(--ff-roboto);
            color: var(--onyx);
            font-size: var(--fs-7);
            margin-bottom: 12px;
        }

        .card-cat-link {
            display: inline-block;
            color: inherit;
            transition: var(--transition-1);
        }

        .card-cat-link:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .product-card .card-title {
            margin-bottom: 12px;
        }

        .product-card .card-title>a {
            color: inherit;
            transition: var(--transition-1);
        }

        .product-card .card-title>a:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .card-price {
            color: var(--bittersweet);
            font-family: var(--ff-roboto);
            font-weight: var(--fw-600);
        }

        .card-price del {
            color: var(--gray-x-11-gray);
            margin-left: 8px;
        }

        .btn-link {
            --background: none;
            --border-color: none;
            padding: 0;
            margin-inline: auto;
            max-width: max-content;
            font-family: var(--ff-roboto);
            font-size: var(--fs-6);
            font-weight: var(--fw-500);
            padding-bottom: 6px;
            border-bottom: 1px solid var(--white);
        }

        .btn-link:is(:hover, :focus) {
            border-color: transparent;
        }

        .header {
            background: var(--white);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            transition: var(--transition-1);
            z-index: 4;
        }

        .header.active {
            box-shadow: 0 2px 10px hsla(0, 0%, 0%, 0.1);
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-block: 20px;
        }

        .nav-open-btn {
            font-size: 30px;
            background: var(--bittersweet);
            color: var(--white);
            padding: 8px;
        }

        .nav-open-btn:is(:hover, :focus) {
            background: var(--salmon);
        }

        .nav-open-btn ion-icon {
            --ionicon-stroke-width: 40px;
        }

        .navbar {
            background: var(--white);
            position: fixed;
            top: 0;
            left: -280px;
            width: 100%;
            max-width: 270px;
            height: 100%;
            border-right: 3px solid var(--rich-black-fogra-29);
            font-family: var(--ff-roboto);
            overflow-y: auto;
            overscroll-behavior: contain;
            z-index: 2;
            visibility: hidden;
            transition: 0.25s var(--cubic-out);
        }

        .navbar.active {
            visibility: visible;
            transform: translateX(280px);
            transition: 0.5s var(--cubic-in);
        }

        .nav-close-btn {
            color: var(--rich-black-fogra-29);
            position: absolute;
            top: 0;
            right: 0;
            padding: 13px;
            font-size: 25px;
            transition: var(--transition-1);
        }

        .nav-close-btn ion-icon {
            --ionicon-stroke-width: 55px;
        }

        .nav-close-btn:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .navbar .logo {
            background: var(--maximum-blue-green_10);
            padding-block: 50px 40px;
        }

        .navbar .logo img {
            margin-inline: auto;
        }

        .navbar-list,
        .nav-action-list {
            margin: 30px;
        }

        .navbar-list {
            padding: 20px;
            border-bottom: 1px solid var(--gainsboro);
        }

        .navbar-link {
            color: var(--rich-black-fogra-29);
            padding-block: 10px;
            transition: var(--transition-1);
        }

        .navbar-link:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .navbar-item:not(:last-child) {
            border-bottom: 1px solid var(--gainsboro);
        }

        .nav-action-list>li:first-child {
            display: none;
        }

        .nav-action-btn {
            color: var(--rich-black-fogra-29);
            display: flex;
            align-items: center;
            gap: 10px;
            width: 100%;
            padding-block: 10px;
            transition: var(--transition-1);
        }

        .nav-action-btn:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .nav-action-btn ion-icon {
            font-size: 22px;
            --ionicon-stroke-width: 25px;
        }

        .nav-action-text strong {
            font-weight: initial;
            color: var(--bittersweet);
        }

        .nav-action-badge {
            margin-left: auto;
            font-size: var(--fs-8);
            background: var(--bittersweet);
            color: var(--white);
            width: 18px;
            height: 18px;
            display: grid;
            place-items: center;
            border-radius: 50%;
        }

        .overlay {
            position: fixed;
            inset: 0;
            background: hsla(0, 0%, 0%, 0.6);
            z-index: 1;
            opacity: 0;
            pointer-events: none;
            transition: var(--transition-1);
        }

        .overlay.active {
            opacity: 1;
            pointer-events: all;
        }

        .hero {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: left;
            min-height: 400px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .hero-title {
            margin-bottom: 10px;
        }

        .hero-title>strong {
            display: block;
        }

        .hero-text {
            color: var(--onyx);
            font-family: var(--ff-roboto);
            font-size: var(--fs-8);
            line-height: 1.8;
            max-width: 46ch;
            margin-bottom: 25px;
        }

        .collection-card {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            padding-block: 45px 25px;
        }

        .product .section-title {
            text-align: center;
            margin-bottom: 25px;
        }

        .filter-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
        }

        .filter-btn {
            color: var(--onyx);
            padding: 10px 16px;
            font-family: var(--ff-roboto);
            font-size: var(--fs-7);
            font-weight: var(--fw-500);
            border: 1px solid var(--gainsboro);
            border-radius: 30px;
        }

        .filter-btn.active {
            background: var(--bittersweet);
            color: var(--white);
            border-color: var(--bittersweet);
        }

        .product-list {
            display: grid;
            gap: 50px 25px;
        }

        .cta-list {
            display: grid;
            gap: 40px;
        }

        .cta-card {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            color: var(--white);
            text-align: center;
            padding: 50px 20px;
        }

        .cta-card .card-subtitle {
            font-size: var(--fs-5);
            margin-bottom: 15px;
        }

        .cta-card .card-title {
            color: inherit;
            line-height: 1.3;
            margin-bottom: 20px;
        }

        .special-banner {
            height: 500px;
            background-color: var(--smoky-black);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
        }

        .special-banner .banner-title {
            color: var(--white);
            font-weight: var(--fw-600);
        }

        .special .section-title {
            margin-block: 40px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .special .section-title .text {
            min-width: max-content;
        }

        .special .section-title .line {
            width: 100%;
            height: 1px;
            background: var(--gainsboro);
        }

        .service-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding-inline: 30px;
        }

        .service-item {
            width: 220px;
        }

        .service-card {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .service-card .card-icon {
            background: var(--bittersweet);
            min-width: 55px;
            height: 55px;
            border-radius: 50%;
            display: grid;
            place-items: center;
        }

        .service-card .card-icon img {
            filter: brightness(0) invert(1);
            width: 60%;
            height: auto;
        }

        .service-card .card-title {
            font-size: var(--fs-6);
            margin-bottom: 8px;
        }

        .service-card .card-text {
            color: var(--onyx);
            font-family: var(--ff-roboto);
            font-size: var(--fs-7);
        }

        .service-card .card-text span {
            display: inline-block;
            color: var(--bittersweet);
        }

        .insta-post-list {
            gap: 0;
        }

        .insta-post-list .insta-post-item {
            position: relative;
            min-width: 33.33%;
            aspect-ratio: 1 / 1;
        }

        .insta-post-link {
            position: absolute;
            inset: 0;
            display: grid;
            place-items: center;
            background: var(--oxford-blue_60);
            opacity: 0;
            transition: var(--transition-1);
        }

        .insta-post-link ion-icon {
            color: var(--white);
            font-size: 40px;
        }

        .insta-post-link:is(:hover, :focus) {
            opacity: 1;
        }

        .footer {
            font-family: var(--ff-roboto);
        }

        .footer-top {
            background: var(--cultured);
        }

        .footer-brand {
            padding-bottom: 50px;
            border-bottom: 1px solid var(--gainsboro);
            margin-bottom: 50px;
        }

        .footer-brand .logo {
            margin-bottom: 15px;
        }

        .social-list {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .social-link {
            background: var(--gainsboro);
            color: var(--onyx);
            font-size: 20px;
            padding: 10px;
            transition: var(--transition-1);
        }

        .social-link:is(:hover, :focus) {
            background: var(--bittersweet);
            color: var(--white);
        }

        .footer-list-title {
            position: relative;
            color: var(--rich-black-fogra-29);
            font-family: var(--ff-josefin-sans);
            font-size: var(--fs-3);
            font-weight: var(--fw-700);
            margin-bottom: 25px;
        }

        .footer-list-title::after {
            content: "";
            display: block;
            background: var(--bittersweet);
            width: 50px;
            height: 2px;
            margin-top: 10px;
        }

        .footer-link {
            color: var(--onyx);
            display: flex;
            align-items: center;
            gap: 10px;
            padding-block: 6px;
            transition: var(--transition-1);
        }

        a.footer-link:is(:hover, :focus) {
            color: var(--bittersweet);
        }

        .footer-link-text {
            flex: 1;
        }

        .footer-list:not(:last-child) {
            margin-bottom: 30px;
        }

        .footer-list:first-child ion-icon {
            color: var(--bittersweet);
            font-size: 22px;
        }

        .table-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            text-align: left;
            padding-block: 6px;
        }

        .table-head {
            color: var(--rich-black-fogra-29);
            font-weight: var(--fw-500);
        }

        .table-data {
            color: var(--onyx);
        }

        .newsletter-text {
            color: var(--onyx);
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .newsletter-form {
            position: relative;
        }

        .newsletter-input {
            background: var(--white);
            color: var(--onyx);
            padding: 15px 25px;
            padding-right: 120px;
        }

        .newsletter-form .btn-primary {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            font-family: var(--ff-josefin-sans);
            font-size: var(--fs-6);
            font-weight: var(--fw-600);
            padding-inline: 20px;
        }

        .footer-bottom {
            background: var(--rich-black-fogra-29);
            padding-block: 20px;
        }

        .copyright {
            text-align: center;
            color: var(--white);
        }

        .copyright-link {
            display: inline-block;
            color: var(--bittersweet);
        }

        .go-top-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background: var(--bittersweet);
            color: var(--white);
            font-size: 20px;
            padding: 10px;
            border: 4px solid var(--white);
            border-radius: 50%;
            opacity: 0;
            visibility: hidden;
            transition: var(--transition-1);
            z-index: 2;
        }

        .go-top-btn.active {
            opacity: 1;
            visibility: visible;
        }

        .go-top-btn:is(:hover, :focus) {
            background: var(--salmon);
        }

        @media (min-width: 575px) {

            :root {
                --fs-1: 4rem;
            }

            .container {
                max-width: 650px;
                width: 100%;
                margin-inline: auto;
            }

            .has-scrollbar>li {
                min-width: calc(50% - 12.5px);
            }

            .hero-text {
                font-size: var(--fs-7);
            }

            .product-list {
                grid-template-columns: 1fr 1fr;
            }

            .cta-card {
                text-align: left;
            }

            .cta-card .card-title {
                max-width: 14ch;
            }

            .cta-card .btn-link {
                margin-inline: 0;
            }

            .insta-post-list .insta-post-item {
                min-width: 25%;
            }

            .footer-brand .logo {
                margin-bottom: 0;
            }

            .footer-brand {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .footer-link-box {
                display: grid;
                grid-template-columns: 1fr 1fr;
                column-gap: 30px;
            }

        }

        @media (min-width: 768px) {
            :root {
                --fs-2: 3rem;
            }

            .container {
                max-width: 720px;
            }

            .h4 {
                --fs-5: 2rem;
            }

            .special-banner .banner-title {
                --fs-4: 2.2rem;
            }

            .special-product .has-scrollbar>li {
                min-width: 100%;
            }

            .special .container {
                display: flex;
                gap: 25px;
            }

            .special .section-title {
                margin-block-start: 0;
            }

            .special-banner,
            .special-product {
                min-width: calc(50% - 12.5px);
            }

            .special-banner {
                height: auto;
            }

            .insta-post-list .insta-post-item {
                min-width: 20%;
            }

             .go-top-btn {
                padding: 15px;
                border-width: 6px;
                bottom: 30px;
                right: 30px;
            }

        }

        @media (min-width: 992px) {
            :root {
                --fs-3: 2.4rem;
            }

            .container {
                max-width: 970px;
            }

            .has-scrollbar>li {
                min-width: calc(33.33% - 16.66px);
            }
            .nav-open-btn,
            .nav-close-btn,
            .navbar .logo,
            .nav-action-text,
            .overlay {
                display: none;
            }

            .navbar,
            .navbar-list,
            .nav-action-list {
                all: unset;
            }

            .navbar-item:not(:last-child) {
                border: none;
            }

            .navbar-list,
            .nav-action-list {
                display: flex;
            }

            .nav-action-list {
                gap: 20px;
            }

            .navbar {
                display: flex;
                align-items: center;
                flex-grow: 1;
            }

            .navbar-list {
                margin-inline: auto;
                gap: 35px;
            }

            .navbar-link {
                font-family: var(--ff-roboto);
                font-weight: var(--fw-500);
            }

            .nav-action-list>li:first-child {
                display: block;
            }

            .nav-action-btn {
                position: relative;
            }

            .nav-action-badge ion-icon {
                --ionicon-stroke-width: 30px;
            }

            .nav-action-badge {
                position: absolute;
                top: 5px;
                right: -12px;
            }

            .hero {
                height: 480px;
            }

            .product-list {
                grid-template-columns: repeat(3, 1fr);
            }

            .cta-list {
                grid-template-columns: 1fr 1fr;
                gap: 25px;
            }

            .cta-card {
                padding-inline: 50px;
            }

            .special-banner {
                min-width: calc(33.33% - 25px);
            }

            .special-product {
                min-width: 66.66%;
            }

            .special-product .has-scrollbar>li {
                min-width: calc(50% - 12.5px);
            }

            .insta-post-list .insta-post-item {
                min-width: 16.666%;
            }

        }


        @media (min-width: 1200px) {
            :root {
                --fs-1: 5rem;
                --fs-2: 3.6rem;
            }

            .container {
                max-width: 1280px;
            }

            .hero {
                height: 580px;
            }

            .hero .container {
                max-width: 1000px;
            }

            .hero-text {
                font-size: var(--fs-6);
                max-width: 50ch;
            }

            .product-list {
                grid-template-columns: repeat(4, 1fr);
            }

            .special-banner {
                min-width: calc(25% - 25px);
            }

            .special-product .has-scrollbar>li {
                min-width: calc(33.33% - 16.66px);
            }

            .special-banner .banner-title {
                --fs-4: 2.4rem;
            }

            .service-item {
                width: 275px;
            }

            .service-card .card-icon {
                min-width: 70px;
                height: 70px;
            }

            .service-card .card-title {
                --fs-6: 2rem;
            }

            .insta-post {
                padding-block-end: 0;
            }

            .insta-post-list .insta-post-item {
                min-width: 12.5%;
            }

            .insta-post-list {
                padding-bottom: 0;
            }

            .footer-link-box {
                grid-template-columns: 1.5fr 1fr 1fr 1.5fr;
                gap: 50px;
            }

        }

        p {
            color: rgb(0, 0, 0);
        }
    </style>
    <link rel="shortcut icon" href="./imgs/LOGOOFICIO.png" type="image/svg+xml">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">
    <link rel="preload" href="./imgs/LOGOOFICIO.png" as="image">
</head>
<body id="top">
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>
            <a href="#" class="logo"> 
                <img src="./imgs/LOGOOFICIO.png" width="160" height="50" alt="Footcap logo">
            </a>
            <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
                <ion-icon name="menu-outline"></ion-icon>
            </button>
            <nav class="navbar" data-navbar>
                <a href="#" class="logo">
                    <img src="./imgs/LOGOOFICIO.png" width="190" height="50" alt="Footcap logo">
                </a>
                <ul class="navbar-list">
                    <li class="navbar-item">
                        <a href="{{ route('teste') }}" class="navbar-link">Inicio</a>
                    </li>
                    <li class="navbar-item">
                        <a href="#contato" class="navbar-link">Contato</a>
                    </li>
                </ul>
                <div class="search-box">
                    <form action="{{ route('teste') }}" method="get" role="search">
                        <div class="search-container">
                            <input type="text" id="searchInput" name="search" placeholder="Buscar produtos">
                            <button id="searchButton" aria-label="Pesquisar">
                                <ion-icon name="search-outline"></ion-icon>
                            </button>
                        </div>
                </div>
                </form>
                <style>
                    .search-container {
                        display: flex;
                        align-items: center;
                        border: 2px solid #9c27b0;
                        border-radius: 4px;
                        padding: 6px;
                        margin-right: 10px;
                    }

                    #searchInput {
                        border: none;
                        outline: none;
                        width: 100%;
                        padding: 6px;
                    }

                    #searchButton {
                        background-color: #9c27b0;
                        color: white;
                        border: none;
                        border-radius: 4px;
                        cursor: pointer;
                        padding: 6px 12px;
                    }

                    #searchButton:hover {
                        background-color: #7b1fa2;
                    }
                </style>
                <ul class="navbar-list">
                    @if (auth()->check())
                        @if (auth()->user()->permissaoID == 1)
                            <li>
                                <a class="nav-action-btn" id="carrinho-button" href="{{ route('Produtos.create') }}">
                                <i class="fa-regular fa-square-plus"></i>
                                    <span class="nav-action-text">Criar produto</span></a>
                            </li>
                            <li>
                                <a class="nav-action-btn" id="sair-button" href="{{ route('login.create') }}">
                                    <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
                                    <span class="nav-action-text">Sair</span></a>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('carrinho.index') }}" class="nav-action-btn" id="carrinho-button">
                                    <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                                    <span class="translate-middle badge rounded-pill bg-danger">
                                        {{ count($itens) }}
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="nav-action-btn" id="sair-button" href="{{ route('login.create') }}">
                                    <ion-icon name="log-out-outline" aria-hidden="true"></ion-icon>
                                    <span class="nav-action-text">Sair</span></a>
                            </li>
                        @endif
                    @else
                        <li>
                            <a href="{{ route('login.create') }}" class="nav-action-btn" id="login-register-button">
                                <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                                <span class="nav-action-text">Login / Registrar</span>
                            </a>
                        </li>
                    @endif
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <article>
            <section class="section hero"
                style="background-image: url('https://akamai.sscdn.co/tb/cifra-blog/pt/wp-content/uploads/2022/02/9135ab3-tipos-de-instrumentos-musicais.png')">
                <div class="container">
                    <h2 style="color: black; font-size: 40px;">
                        Sejam Bem Vindos
                    </h2>
                    <p class="hero-text" style="color: rgb(0, 0, 0);  font-size: 20px;">
                        Explore nossa seleção de instrumentos de alta qualidade para sua jornada musical. Seja iniciante
                        ou experiente, estamos aqui para ajudar. A música nos une, e estamos comprometidos em tornar sua
                        experiência especial. Obrigado por escolher nossa loja.
                    </p>
                </div>
            </section>
      <section class="section product" id="produtosMaisVendidos">
          <h2 class="h2 section-title" style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size: 40px;">Produtos</h2> 
                @foreach ($produtos as $produto)
                    <div class="container">
                        <ul class="product-list">
                            <li class="product-item teclados">
                                <div class="product-card" tabindex="0">
                                    <figure class="card-banner">
                                        <img src="{{ asset('storage/' . $produto->foto) }}" style="width: 300px"
                                            loading="lazy" alt="Instrumentos" class="image-contain">
                                        @if (auth()->check())
                                            @if (auth()->user()->permissaoID == 1)
                                                <ul class="card-action-list">
                                                    <li class="card-action-item">
                                                        <a href="{{ route('Produtos.edit', $produto->id) }}"
                                                            class="card-action-btn" aria-labelledby="card-label-1">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <form action="{{ route('produto.delete', $produto->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="card-action-btn"
                                                                aria-labelledby="card-label-1">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                @else
                                                    <ul class="card-action-list">
                                                        <li class="card-action-item">
                                                            <form action="{{ route('carrinho.store') }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id"
                                                                    value="{{ $produto->id }}">
                                                                    <input type="hidden" name="decricao" value="{{ $produto->decricao }}">
                                        <input type="hidden" name="precoUnitario"
                                            value="{{ $produto->precoUnitario }}">
                                        <input type="hidden" name="foto"
                                            value="{{ asset('storage/' . $produto->foto) }}">
                                            <input type="number" id="quantity" name="quantidade" value="1" min="1"
                                    style="display: center; flex-direction: column;align-items: center;font-size: 18px; 
                    text-align: center;
                    width: 50px;
                    border: 1px solid #ccc;
                    border-radius: 5px;
                    padding: 5px;">
                                                                <button type="submit" class="card-action-btn"
                                                                    aria-labelledby="card-label-1">
                                                                    <ion-icon name="cart-outline"></ion-icon>
                                                                </button>
                                                            </form>
                                                        </li>
                                            @endif
                                        @endif    
                        </ul>
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">
                                <p> {{ $produto->decricao }}</p>
                            </h3>
                            <div class="product-quantity">
                            <data class="card-price">R$: {{ $produto->precoUnitario }}</data>
                        </div>
                    </div>
                    </li>
                @endforeach
                </div>
            </section>
            <section class="section service">
                <div class="container">
                    <ul class="service-list">
                        <li class="service-item">
                            <div class="service-card">
                                <div class="card-icon">
                                    <img src="" width="53" height="28" loading="lazy"
                                        alt="Service icon">
                                </div>
                                <div>
                                    <h3 class="h4 card-title">Frete Gratis</h3>
                                    <p class="card-text">
                                        100% GRATIUTO
                                    </p>
                                </div>
                            </div>
                    </li>
                        <li class="service-item">
                            <div class="service-card">
                                <div class="card-icon">
                                    <img src="./assets/images/service-2.png" width="43" height="35"
                                        loading="lazy" alt="Service icon">
                                </div>
                                <div>
                                    <h3 class="h4 card-title">Pagamento Rápido</h3>
                                    <p class="card-text">
                                        100% SEGURO
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="service-item">
                            <div class="service-card">
                                <div class="card-icon">
                                    <img src="./assets/images/service-3.png" width="40" height="40"
                                        loading="lazy" alt="Service icon">
                                </div>
                                <div>
                                    <h3 class="h4 card-title">DEVOLUÇÕES GRATUITAS</h3>
                                    <p class="card-text">
                                        DINHEIRO DE VOLTA EM 30 DIAS
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    </div>
            </section>
             <section class="section insta-post">
                <ul class="insta-post-list has-scrollbar">
                    <li class="insta-post-item">
                        <img src="./imgs/insta1.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta2.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta3.jpg" width="200%" height="100%" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta4.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta5.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta6.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta7.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li class="insta-post-item">
                        <img src="./imgs/insta8.jpg" width="100" height="100" loading="lazy"
                            alt="Instagram post" class="insta-post-banner image-contain">
                        <a href="#" class="insta-post-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                </ul>
            </section> 
        </article>
    </main>
    <footer class="footer">
        <div class="footer-top section">
            <div class="container">
                <div class="footer-brand">
                    <a href="#" class="logo">
                        <img src="./imgs/LOGOOFICIO.png" width="160" height="50" alt="Footcap logo">
                    </a>
                    <ul class="social-list">
                        <li>
                            <a href="https://instagram.com/cifraclubvvg?igshid=NGVhN2U2NjQ0Yg==" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-link-box">
                    <ul class="footer-list">
                        <div class="footer-link-box" id="contato"></div>
                        <li>
                            <address class="footer-link">
                                <ion-icon name="location"></ion-icon>
                                <span class="footer-link-text">
                                    Av. Parque Central, 1315 - Distrito Industrial I, Maracanaú - CE, 61939-140
                                </span>
                            </address>
                        </li>
                        <li>
                            <a href="tel:+557343673257" class="footer-link">
                                <ion-icon name="call"></ion-icon>
                                <span class="footer-link-text">(85)3512-8701</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:footcap@help.com" class="footer-link">
                                <ion-icon name="mail"></ion-icon>
                                <span class="footer-link-text">ifce@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="footer-list">
                        <li>
                            <p class="footer-list-title">Minha Conta</p>
                        </li>
                        <li>
                            <a href="login.html" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                <span class="footer-link-text">Minha Conta</span>
                            </a>
                        </li>
                        <li>
                            <a href="carrinho.html" class="footer-link">
                                <ion-icon name="chevron-forward-outline"></ion-icon>
                                <span class="footer-link-text">Ver Carrinho</span>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-list">
                        <p class="footer-list-title">Horário de Abertura</p>
                        <table class="footer-table">
                            <tbody>
                                <tr class="table-row">
                                    <th class="table-head" scope="row">Seg - Ter:</th>
                                    <td class="table-data">08:00 - 10:00</td>
                                </tr>
                                <tr class="table-row">
                                    <th class="table-head" scope="row">Quar - Quin:</th>
                                    <td class="table-data">08:00 - 07:00</td>
                                </tr>
                                <tr class="table-row">
                                    <th class="table-head" scope="row">Sex:</th>
                                    <td class="table-data">07:00 - 12:00</td>
                                </tr>
                                <tr class="table-row">
                                    <th class="table-head" scope="row">Sab:</th>
                                    <td class="table-data">09:00 - 20:00</td>
                                </tr>
                                <tr class="table-row">
                                    <th class="table-head" scope="row">Domingo:</th>
                                    <td class="table-data">Fechado</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="footer-list">
                        <p class="footer-list-title">Boletim de Notícias</p>
                        <p class="newsletter-text">
                            Transforme com autoridade as potencialidades 24 horas por dia, 7 dias por semana, com
                            parcerias livres de
                            erros.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <p class="copyright">
                    &copy; 2023 <a href="#" class="copyright-link">V.V.G</a>. Todos os direitos reservados
                </p>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="jquery-3.6.4.min.js"></script>
</body>
</html>
