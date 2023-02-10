<html>

<head>
    




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <base href="admin">
    <link rel="shortcut icon" href="assets/thankyou-favicon.ico">
    <title>Ваша заявка принята</title>
    <style>
        body {
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            line-height: 1.5;
            background-color: rgb(0, 0, 0);
        }

        .thankyou {
            overflow: hidden;
            box-sizing: border-box;
            min-height: 300px;
            background: url(assets/thankyou-bg.jpg) center bottom no-repeat #000000;
            text-align: center;
            position: relative;
            padding: 10px;
            font-size: 16px;
        }

        .thankyou__title {
            color: rgb(10, 161, 80);
            font-size: 36px;
        }

        .thankyou__title--error {
            color: #da0000;
        }

        .thankyou__divider {
            max-width: 100%;
        }

        .thankyou__image {
            position: absolute;
            bottom: 0;
            left: 5%;
        }

        .thankyou__notice {
            font-size: 13px;
        }

        .thankyou--full {
            min-height: 100vh;
        }

        .button {
            background: transparent linear-gradient(to bottom, rgb(13, 181, 57) 0%, rgb(0, 144, 67) 100%) repeat scroll 0 0;
            border: none;
            border-bottom: 2px solid rgb(21, 90, 53);
            outline: 0 none;
            padding: 15px 25px;
            text-transform: uppercase;
            color: #000;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            -webkit-transform: translateY(-1px);
            -moz-transform: translateY(-1px);
            -ms-transform: translateY(-1px);
            -o-transform: translateY(-1px);
            transform: translateY(-1px);
        }

        .button--added {
            background: transparent linear-gradient(to bottom, rgb(234, 179, 13) 0%, rgb(236, 129, 13) 100%) repeat scroll 0 0;
            border-bottom: 2px solid rgb(180, 80, 11);
        }

        .offer {
            text-transform: uppercase;
            background: url(assets/thankyou-offerbg.jpg) repeat;
            color: #000;
            padding: 20px 10px;
            text-align: center;
        }

        .upsell {
            margin: 50px auto;
            width: 92%;
            max-width: 800px;
            display: flex;
            background-color: #fff;
            border-bottom: 2px solid rgb(222, 225, 227);
            border-radius: 2px;
            padding: 10px;
            color: rgba(0, 0, 0, .8);
            position: relative;
        }

        .upsell__text {
            flex-basis: 50%;
            max-width: 50%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 10px;
        }

        .upsell__title {
            margin: 0;
            font-weight: normal;
            font-size: 28px;
            line-height: 1.2;
        }

        .upsell__rating {
            display: block;
            margin: 10px 0;
        }

        .upsell__old-price {
            font-size: 20px;
            display: inline-block;
            margin-right: 10px;
        }

        .upsell__new-price {
            font-size: 32px;
            color: rgb(10, 161, 80);
        }

        .upsell__description {
            white-space: pre-wrap;
            word-wrap: break-word;
        }

        .upsell__image-container {
            flex-basis: 50%;
            padding: 10px;
        }

        .upsell__image {
            width: 100%;
        }

        .upsell__discount {
            background: url(assets/thankyou-sale.png) center no-repeat;
            width: 109px;
            height: 43px;
            position: absolute;
            left: -10px;
            top: 20px;
            color: #fff;
            font-weight: bold;
            font-size: 22px;
            box-sizing: border-box;
            display: block;
            padding-left: 10px;
            line-height: 34px;
        }

        @media all and (max-width: 600px) {
            .thankyou__title {
                font-size: 30px;
            }

            .upsell {
                flex-wrap: wrap;
                width: 87%;
            }

            .upsell__text {
                flex-basis: 100%;
                max-width: 100%;
            }

            .upsell__title,
            .upsell__price {
                text-align: center;
            }

            .upsell__rating {
                margin-left: auto;
                margin-right: auto;
            }

            .upsell__image-container {
                flex-basis: 100%;
            }

            .upsell__button-container {
                text-align: center;
            }

            .thankyou__image {
                display: none;
            }

            .thankyou--full .thankyou__image {
                display: inline;
            }
        }

        @media all and (max-height: 500px) {
            .thankyou__image {
                width: 130px;
                height: auto;
            }
        }
    </style>



    <style>
        *,
        ::before,
        ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .gpt-center-with-flex {
            display: flex;
            align-items: center;
            justify-content: center
        }

        .gpt-sr-only {
            position: absolute !important;
            width: 1px !important;
            height: 1px !important;
            padding: 0 !important;
            margin: -1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            white-space: nowrap !important;
            border-width: 0 !important
        }

        .gpt-fixed {
            position: fixed !important
        }

        .gpt-absolute {
            position: absolute !important
        }

        .gpt-relative {
            position: relative !important
        }

        .gpt-top-0 {
            top: 0px !important
        }

        .gpt-left-0 {
            left: 0px !important
        }

        .gpt-bottom-6 {
            bottom: 24px !important
        }

        .gpt-right-6 {
            right: 24px !important
        }

        .-gpt-top-2 {
            top: -8px !important
        }

        .-gpt-right-2 {
            right: -8px !important
        }

        .-gpt-bottom-1 {
            bottom: -4px !important
        }

        .gpt-right-1 {
            right: 4px !important
        }

        .gpt-z-\[99999999\] {
            z-index: 99999999 !important
        }

        .gpt-z-50 {
            z-index: 50 !important
        }

        .gpt-z-10 {
            z-index: 10 !important
        }

        .gpt-z-20 {
            z-index: 20 !important
        }

        .gpt-m-3 {
            margin: 12px !important
        }

        .gpt-my-auto {
            margin-top: auto !important;
            margin-bottom: auto !important
        }

        .gpt-my-2 {
            margin-top: 8px !important;
            margin-bottom: 8px !important
        }

        .gpt-my-3 {
            margin-top: 12px !important;
            margin-bottom: 12px !important
        }

        .gpt-mb-2 {
            margin-bottom: 8px !important
        }

        .gpt-mt-2 {
            margin-top: 8px !important
        }

        .gpt-mb-4 {
            margin-bottom: 16px !important
        }

        .gpt-mb-3 {
            margin-bottom: 12px !important
        }

        .gpt-mt-6 {
            margin-top: 24px !important
        }

        .gpt-mr-1 {
            margin-right: 4px !important
        }

        .gpt-box-border {
            box-sizing: border-box !important
        }

        .gpt-flex {
            display: flex !important
        }

        .gpt-inline-flex {
            display: inline-flex !important
        }

        .gpt-h-screen {
            height: 100vh !important
        }

        .gpt-h-4 {
            height: 16px !important
        }

        .gpt-h-full {
            height: 100% !important
        }

        .gpt-h-5 {
            height: 20px !important
        }

        .gpt-h-7 {
            height: 28px !important
        }

        .gpt-h-6 {
            height: 24px !important
        }

        .gpt-h-12 {
            height: 48px !important
        }

        .gpt-h-8 {
            height: 32px !important
        }

        .gpt-max-h-28 {
            max-height: 112px !important
        }

        .gpt-max-h-12 {
            max-height: 48px !important
        }

        .gpt-max-h-80 {
            max-height: 320px !important
        }

        .gpt-min-h-\[48px\] {
            min-height: 48px !important
        }

        .gpt-min-h-\[42px\] {
            min-height: 42px !important
        }

        .gpt-min-h-\[20rem\] {
            min-height: 20rem !important
        }

        .gpt-min-h-\[5rem\] {
            min-height: 5rem !important
        }

        .gpt-w-14 {
            width: 56px !important
        }

        .gpt-w-full {
            width: 100% !important
        }

        .gpt-w-\[600px_\!important\] {
            width: 600px !important
        }

        .gpt-w-4 {
            width: 16px !important
        }

        .gpt-w-5 {
            width: 20px !important
        }

        .gpt-w-3 {
            width: 12px !important
        }

        .gpt-w-7 {
            width: 28px !important
        }

        .gpt-w-6 {
            width: 24px !important
        }

        .gpt-w-11 {
            width: 44px !important
        }

        .gpt-w-12 {
            width: 48px !important
        }

        .gpt-w-8 {
            width: 32px !important
        }

        .gpt-min-w-\[320px\] {
            min-width: 320px !important
        }

        .gpt-max-w-\[600px\] {
            max-width: 600px !important
        }

        .gpt-flex-1 {
            flex: 1 1 0% !important
        }

        @keyframes gpt-fade-in-merlinGUI {
            from {
                opacity: 0;
                transform: translateY(100px) scale(0.8)
            }

            to {
                opacity: 1;
                transform: none scale(1)
            }
        }

        .gpt-animate-fade-in-merlinGUI {
            animation: gpt-fade-in-merlinGUI 200ms 0ms ease forwards !important
        }

        @keyframes gpt-fade-out-merlinGUI {
            from {
                opacity: 1;
                transform: none scale(1)
            }

            to {
                opacity: 0;
                transform: translateY(100px) scale(0.8)
            }
        }

        .gpt-animate-fade-out-merlinGUI {
            animation: gpt-fade-out-merlinGUI 200ms 0ms ease forwards !important
        }

        @keyframes gpt-fade-in-2 {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .gpt-animate-fade-in-2 {
            animation: gpt-fade-in-2 300ms 0ms ease-in forwards !important
        }

        @keyframes gpt-fade-in {
            from {
                opacity: 0;
                transform: translateY(-10px) scale(0.8)
            }

            to {
                opacity: 1;
                transform: none scale(1)
            }
        }

        .gpt-animate-fade-in {
            animation: gpt-fade-in 300ms 0ms ease forwards !important
        }

        @keyframes gpt-fade-out {
            from {
                opacity: 1;
                transform: none scale(1)
            }

            to {
                opacity: 0;
                transform: translateY(-10px) scale(0.8)
            }
        }

        .gpt-animate-fade-out {
            animation: gpt-fade-out 300ms 0ms ease forwards !important
        }

        .gpt-cursor-pointer {
            cursor: pointer !important
        }

        .gpt-cursor-not-allowed {
            cursor: not-allowed !important
        }

        .gpt-cursor-grab {
            cursor: grab !important
        }

        .gpt-select-none {
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            user-select: none !important
        }

        .gpt-flex-row {
            flex-direction: row !important
        }

        .gpt-flex-row-reverse {
            flex-direction: row-reverse !important
        }

        .gpt-flex-col {
            flex-direction: column !important
        }

        .gpt-items-start {
            align-items: flex-start !important
        }

        .gpt-items-center {
            align-items: center !important
        }

        .gpt-items-stretch {
            align-items: stretch !important
        }

        .gpt-justify-start {
            justify-content: flex-start !important
        }

        .gpt-justify-end {
            justify-content: flex-end !important
        }

        .gpt-justify-center {
            justify-content: center !important
        }

        .gpt-justify-between {
            justify-content: space-between !important
        }

        .gpt-gap-2 {
            gap: 8px !important
        }

        .gpt-gap-4 {
            gap: 16px !important
        }

        .gpt-gap-6 {
            gap: 24px !important
        }

        .gpt-gap-3 {
            gap: 12px !important
        }

        .gpt-gap-1 {
            gap: 4px !important
        }

        .gpt-overflow-hidden {
            overflow: hidden !important
        }

        .gpt-overflow-y-auto {
            overflow-y: auto !important
        }

        .gpt-overflow-y-visible {
            overflow-y: visible !important
        }

        .gpt-whitespace-nowrap {
            white-space: nowrap !important
        }

        .gpt-rounded-full {
            border-radius: 9999px !important
        }

        .gpt-rounded-lg {
            border-radius: 8px !important
        }

        .gpt-rounded {
            border-radius: 4px !important
        }

        .gpt-rounded-2xl {
            border-radius: 16px !important
        }

        .gpt-rounded-xl {
            border-radius: 12px !important
        }

        .gpt-rounded-3xl {
            border-radius: 24px !important
        }

        .gpt-rounded-md {
            border-radius: 6px !important
        }

        .gpt-rounded-t-xl {
            border-top-left-radius: 12px !important;
            border-top-right-radius: 12px !important
        }

        .gpt-border {
            border-width: 1px !important
        }

        .gpt-border-\[0px\] {
            border-width: 0px !important
        }

        .gpt-border-b {
            border-bottom-width: 1px !important
        }

        .gpt-border-t {
            border-top-width: 1px !important
        }

        .gpt-border-t-0 {
            border-top-width: 0px !important
        }

        .gpt-border-solid {
            border-style: solid !important
        }

        .gpt-border-none {
            border-style: none !important
        }

        .gpt-border-slate-300 {
            --tw-border-opacity: 1 !important;
            border-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
        }

        .gpt-border-slate-700 {
            --tw-border-opacity: 1 !important;
            border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
        }

        .gpt-border-violet-700 {
            --tw-border-opacity: 1 !important;
            border-color: rgb(109 40 217 / var(--tw-border-opacity)) !important
        }

        .gpt-border-b-slate-300 {
            --tw-border-opacity: 1 !important;
            border-bottom-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
        }

        .gpt-border-t-slate-300 {
            --tw-border-opacity: 1 !important;
            border-top-color: rgb(203 213 225 / var(--tw-border-opacity)) !important
        }

        .gpt-bg-gray-800 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-gray-200 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(229 231 235 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-transparent {
            background-color: transparent !important
        }

        .gpt-bg-slate-100 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(241 245 249 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-200 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(226 232 240 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-300 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-white {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-red-700 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(185 28 28 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-900 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-violet-600 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(124 58 237 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-800 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-400 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(148 163 184 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-violet-800 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(91 33 182 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-slate-600 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-green-100 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(220 252 231 / var(--tw-bg-opacity)) !important
        }

        .gpt-bg-opacity-10 {
            --tw-bg-opacity: 0.1 !important
        }

        .gpt-bg-gradient-to-br {
            background-image: linear-gradient(to bottom right, var(--tw-gradient-stops)) !important
        }

        .gpt-bg-btn-gradient {
            background-image: linear-gradient(45deg, #facc15, #db2777, #7e22ce, #5b21b6) !important
        }

        .gpt-bg-gradient-to-b {
            background-image: linear-gradient(to bottom, var(--tw-gradient-stops)) !important
        }

        .gpt-from-purple-700 {
            --tw-gradient-from: #7e22ce !important;
            --tw-gradient-to: rgb(126 34 206 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
        }

        .gpt-from-purple-900 {
            --tw-gradient-from: #581c87 !important;
            --tw-gradient-to: rgb(88 28 135 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
        }

        .gpt-from-blue-700 {
            --tw-gradient-from: #1d4ed8 !important;
            --tw-gradient-to: rgb(29 78 216 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
        }

        .gpt-from-amber-500 {
            --tw-gradient-from: #f59e0b !important;
            --tw-gradient-to: rgb(245 158 11 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to) !important
        }

        .gpt-via-pink-500 {
            --tw-gradient-to: rgb(236 72 153 / 0) !important;
            --tw-gradient-stops: var(--tw-gradient-from), #ec4899, var(--tw-gradient-to) !important
        }

        .gpt-to-fuchsia-600 {
            --tw-gradient-to: #c026d3 !important
        }

        .gpt-to-purple-900 {
            --tw-gradient-to: #581c87 !important
        }

        .gpt-to-blue-500 {
            --tw-gradient-to: #3b82f6 !important
        }

        .gpt-to-violet-800 {
            --tw-gradient-to: #5b21b6 !important
        }

        .gpt-to-amber-800 {
            --tw-gradient-to: #92400e !important
        }

        .gpt-bg-right-bottom {
            background-position: right bottom !important
        }

        .gpt-p-\[2px\] {
            padding: 2px !important
        }

        .gpt-p-2 {
            padding: 8px !important
        }

        .gpt-p-3 {
            padding: 12px !important
        }

        .gpt-p-0 {
            padding: 0px !important
        }

        .gpt-p-1 {
            padding: 4px !important
        }

        .gpt-p-\[1px\] {
            padding: 1px !important
        }

        .gpt-py-1 {
            padding-top: 4px !important;
            padding-bottom: 4px !important
        }

        .gpt-px-4 {
            padding-left: 16px !important;
            padding-right: 16px !important
        }

        .gpt-py-3 {
            padding-top: 12px !important;
            padding-bottom: 12px !important
        }

        .gpt-px-3 {
            padding-left: 12px !important;
            padding-right: 12px !important
        }

        .gpt-px-2 {
            padding-left: 8px !important;
            padding-right: 8px !important
        }

        .gpt-py-2 {
            padding-top: 8px !important;
            padding-bottom: 8px !important
        }

        .gpt-py-4 {
            padding-top: 16px !important;
            padding-bottom: 16px !important
        }

        .gpt-px-1 {
            padding-left: 4px !important;
            padding-right: 4px !important
        }

        .gpt-pt-\[7\%\] {
            padding-top: 7% !important
        }

        .gpt-pt-\[3\%\] {
            padding-top: 3% !important
        }

        .gpt-text-left {
            text-align: left !important
        }

        .gpt-text-center {
            text-align: center !important
        }

        .gpt-text-xs {
            font-size: 12px !important;
            line-height: 16px !important
        }

        .gpt-text-sm {
            font-size: 14px !important;
            line-height: 20px !important
        }

        .gpt-text-base {
            font-size: 16px !important;
            line-height: 24px !important
        }

        .gpt-text-lg {
            font-size: 18px !important;
            line-height: 28px !important
        }

        .gpt-text-xl {
            font-size: 20px !important;
            line-height: 28px !important
        }

        .gpt-font-medium {
            font-weight: 500 !important
        }

        .gpt-font-normal {
            font-weight: 400 !important
        }

        .gpt-font-light {
            font-weight: 300 !important
        }

        .gpt-text-slate-50 {
            --tw-text-opacity: 1 !important;
            color: rgb(248 250 252 / var(--tw-text-opacity)) !important
        }

        .gpt-text-black {
            --tw-text-opacity: 1 !important;
            color: rgb(0 0 0 / var(--tw-text-opacity)) !important
        }

        .gpt-text-gray-900 {
            --tw-text-opacity: 1 !important;
            color: rgb(17 24 39 / var(--tw-text-opacity)) !important
        }

        .gpt-text-green-500 {
            --tw-text-opacity: 1 !important;
            color: rgb(34 197 94 / var(--tw-text-opacity)) !important
        }

        .gpt-text-slate-900 {
            --tw-text-opacity: 1 !important;
            color: rgb(15 23 42 / var(--tw-text-opacity)) !important
        }

        .gpt-text-slate-500 {
            --tw-text-opacity: 1 !important;
            color: rgb(100 116 139 / var(--tw-text-opacity)) !important
        }

        .gpt-text-green-700 {
            --tw-text-opacity: 1 !important;
            color: rgb(21 128 61 / var(--tw-text-opacity)) !important
        }

        .gpt-text-gray-400 {
            --tw-text-opacity: 1 !important;
            color: rgb(156 163 175 / var(--tw-text-opacity)) !important
        }

        .gpt-text-neutral-800 {
            --tw-text-opacity: 1 !important;
            color: rgb(38 38 38 / var(--tw-text-opacity)) !important
        }

        .gpt-text-slate-100 {
            --tw-text-opacity: 1 !important;
            color: rgb(241 245 249 / var(--tw-text-opacity)) !important
        }

        .gpt-text-slate-700 {
            --tw-text-opacity: 1 !important;
            color: rgb(51 65 85 / var(--tw-text-opacity)) !important
        }

        .gpt-text-slate-300 {
            --tw-text-opacity: 1 !important;
            color: rgb(203 213 225 / var(--tw-text-opacity)) !important
        }

        .gpt-text-green-800 {
            --tw-text-opacity: 1 !important;
            color: rgb(22 101 52 / var(--tw-text-opacity)) !important
        }

        .gpt-text-amber-700 {
            --tw-text-opacity: 1 !important;
            color: rgb(180 83 9 / var(--tw-text-opacity)) !important
        }

        .gpt-underline {
            text-decoration-line: underline !important
        }

        .gpt-underline-offset-2 {
            text-underline-offset: 2px !important
        }

        .gpt-opacity-0 {
            opacity: 0 !important
        }

        .gpt-shadow-none {
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow) !important
        }

        .gpt-outline-none {
            outline: 2px solid transparent !important;
            outline-offset: 2px !important
        }

        .gpt-drop-shadow-3xl {
            --tw-drop-shadow: drop-shadow(0 35px 35px rgba(0, 0, 0, 0.4)) !important;
            filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow) !important
        }

        .gpt-backdrop-blur-sm {
            --tw-backdrop-blur: blur(4px) !important;
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important;
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important
        }

        .gpt-backdrop-blur {
            --tw-backdrop-blur: blur(8px) !important;
            -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important;
            backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia) !important
        }

        .gpt-transition-colors {
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important
        }

        .gpt-transition-all {
            transition-property: all !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important
        }

        .gpt-transition-opacity {
            transition-property: opacity !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important
        }

        .gpt-duration-200 {
            transition-duration: 200ms !important
        }

        .gpt-duration-500 {
            transition-duration: 500ms !important
        }

        .gpt-duration-700 {
            transition-duration: 700ms !important
        }

        .gpt-duration-300 {
            transition-duration: 300ms !important
        }

        .gpt-ease-in {
            transition-timing-function: cubic-bezier(0.4, 0, 1, 1) !important
        }

        .\[border-bottom-style\:solid\] {
            border-bottom-style: solid
        }

        .\[border-top-style\:solid\] {
            border-top-style: solid
        }

        .\[background-size\:400\%_400\%\] {
            background-size: 400% 400%
        }

        .\[border-style\:solid\] {
            border-style: solid
        }

        .placeholder\:gpt-text-base::-moz-placeholder {
            font-size: 16px !important;
            line-height: 24px !important
        }

        .placeholder\:gpt-text-base::placeholder {
            font-size: 16px !important;
            line-height: 24px !important
        }

        .placeholder\:gpt-text-slate-400::-moz-placeholder {
            --tw-text-opacity: 1 !important;
            color: rgb(148 163 184 / var(--tw-text-opacity)) !important
        }

        .placeholder\:gpt-text-slate-400::placeholder {
            --tw-text-opacity: 1 !important;
            color: rgb(148 163 184 / var(--tw-text-opacity)) !important
        }

        .after\:gpt-absolute::after {
            content: var(--tw-content) !important;
            position: absolute !important
        }

        .after\:gpt-top-\[2px\]::after {
            content: var(--tw-content) !important;
            top: 2px !important
        }

        .after\:gpt-left-\[2px\]::after {
            content: var(--tw-content) !important;
            left: 2px !important
        }

        .after\:gpt-h-5::after {
            content: var(--tw-content) !important;
            height: 20px !important
        }

        .after\:gpt-w-5::after {
            content: var(--tw-content) !important;
            width: 20px !important
        }

        .after\:gpt-rounded-full::after {
            content: var(--tw-content) !important;
            border-radius: 9999px !important
        }

        .after\:gpt-border::after {
            content: var(--tw-content) !important;
            border-width: 1px !important
        }

        .after\:gpt-border-gray-300::after {
            content: var(--tw-content) !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(209 213 219 / var(--tw-border-opacity)) !important
        }

        .after\:gpt-bg-white::after {
            content: var(--tw-content) !important;
            --tw-bg-opacity: 1 !important;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity)) !important
        }

        .after\:gpt-transition-colors::after {
            content: var(--tw-content) !important;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke !important;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1) !important;
            transition-duration: 150ms !important
        }

        .after\:gpt-content-\[\'\'\]::after {
            --tw-content: '' !important;
            content: var(--tw-content) !important
        }

        .hover\:gpt-bg-slate-700:hover {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
        }

        .hover\:gpt-bg-slate-300:hover {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(203 213 225 / var(--tw-bg-opacity)) !important
        }

        .hover\:gpt-bg-left-top:hover {
            background-position: left top !important
        }

        .gpt-group:hover .group-hover\:gpt-opacity-100 {
            opacity: 1 !important
        }

        .gpt-peer:checked~.peer-checked\:gpt-bg-blue-700 {
            --tw-bg-opacity: 1 !important;
            background-color: rgb(29 78 216 / var(--tw-bg-opacity)) !important
        }

        .gpt-peer:checked~.peer-checked\:after\:gpt-translate-x-full::after {
            content: var(--tw-content) !important;
            --tw-translate-x: 100% !important;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y)) !important
        }

        .gpt-peer:checked~.peer-checked\:after\:gpt-border-white::after {
            content: var(--tw-content) !important;
            --tw-border-opacity: 1 !important;
            border-color: rgb(255 255 255 / var(--tw-border-opacity)) !important
        }

        @media (prefers-color-scheme: dark) {
            .dark\:gpt-border {
                border-width: 1px !important
            }

            .dark\:gpt-border-none {
                border-style: none !important
            }

            .dark\:gpt-border-slate-700 {
                --tw-border-opacity: 1 !important;
                border-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
            }

            .dark\:gpt-border-gray-600 {
                --tw-border-opacity: 1 !important;
                border-color: rgb(75 85 99 / var(--tw-border-opacity)) !important
            }

            .dark\:gpt-border-b-slate-700 {
                --tw-border-opacity: 1 !important;
                border-bottom-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
            }

            .dark\:gpt-border-t-slate-700 {
                --tw-border-opacity: 1 !important;
                border-top-color: rgb(51 65 85 / var(--tw-border-opacity)) !important
            }

            .dark\:gpt-border-t-slate-600 {
                --tw-border-opacity: 1 !important;
                border-top-color: rgb(71 85 105 / var(--tw-border-opacity)) !important
            }

            .dark\:gpt-bg-gray-800 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(31 41 55 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-slate-900 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(15 23 42 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-slate-800 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(30 41 59 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-\[\#0F172A_\!important\] {
                background-color: #0F172A !important
            }

            .dark\:gpt-bg-gray-700 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-slate-600 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(71 85 105 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-slate-700 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-bg-green-900 {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(20 83 45 / var(--tw-bg-opacity)) !important
            }

            .dark\:gpt-text-slate-200 {
                --tw-text-opacity: 1 !important;
                color: rgb(226 232 240 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-gray-200 {
                --tw-text-opacity: 1 !important;
                color: rgb(229 231 235 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-slate-100 {
                --tw-text-opacity: 1 !important;
                color: rgb(241 245 249 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-green-500 {
                --tw-text-opacity: 1 !important;
                color: rgb(34 197 94 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-gray-300 {
                --tw-text-opacity: 1 !important;
                color: rgb(209 213 219 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-slate-50 {
                --tw-text-opacity: 1 !important;
                color: rgb(248 250 252 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-slate-500 {
                --tw-text-opacity: 1 !important;
                color: rgb(100 116 139 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-green-200 {
                --tw-text-opacity: 1 !important;
                color: rgb(187 247 208 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-text-amber-500 {
                --tw-text-opacity: 1 !important;
                color: rgb(245 158 11 / var(--tw-text-opacity)) !important
            }

            .dark\:gpt-outline-none {
                outline: 2px solid transparent !important;
                outline-offset: 2px !important
            }

            .dark\:hover\:gpt-bg-gray-700:hover {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(55 65 81 / var(--tw-bg-opacity)) !important
            }

            .dark\:hover\:gpt-bg-slate-700:hover {
                --tw-bg-opacity: 1 !important;
                background-color: rgb(51 65 85 / var(--tw-bg-opacity)) !important
            }
        }

        .\[\&\>\*\]\:gpt-px-3>* {
            padding-left: 12px !important;
            padding-right: 12px !important
        }
    </style>
</head>

<body>
    <main>
        <div class="thankyou ">

            <h1 class="thankyou__title">Дякуємо, заявку прийнято!</h1>
            <p style="color:#fff">
                Графік роботи контакт-центру 10:00–19:00. Оператор зв'яжеться з Вами протягом години (зазвичай швидше)
            </p>
            <img class="thankyou__divider" src="assets/thankyou-divider.png">
            <p class="thankyou__notice" <p="" style="color:#fff">Якщо ви припустилися помилки, поверніться на сторінку
                замовлення та надішліть форму ще раз</p>


            <button class=" button thankyou__button" onclick="history.go(-1);">Повернутись</button>
            <img class="thankyou__image" src="assets/thankyou-girl.png">
        </div>
        <div class="offer">
            <b>Для нових клієнтів ми маємо ексклюзивну пропозицію!</b><br>
            Ви можете додати до замовлення ці товари з індивідуальною знижкою:
        </div>
        <div class="upsell">
            <div class="upsell__image-container">
                <img class="upsell__image" src="uploads/philips-20000mah-power-bank.jpg">
            </div>
            <span class="upsell__discount">-300Грн</span>
            <div class="upsell__text">
                <div>
                    <h2 class="upsell__title">Power Bank Philips 20000mAh, швидка зарядка, 2 USB</h2>
                    <img class="upsell__rating" src="assets/thankyou-rating.png">
                    <div class="upsell__price">
                        <span class="upsell__old-price"><del>1800</del></span>
                        <span class="upsell__new-price">1500</span>грн
                    </div>
                    <p class="upsell__description">Характеристики
                        Бренд: Philips
                        Вид: Повербанк
                        Місткість батареї мА*год: 20000
                        Призначення: Для телефонів, планшетів
                        Тип акумулятора: Літій-полімерний;
                        Місткість акумулятора: 20000 мА * год 3.7V 74Wh;
                        Вход питания:Micro USB 5 В / 2 А, 9 В / 2 А 12 В / 1,5 А
                        Вход Type-C: 5 В / 3 А 9 В / 2 А 12 В / 1,5 Аа
                        Максимальний струм: 2.1 А;
                        Функції заряджання: Power Delivery
                        Два порти Micro-USB та USB-C для власної зарядки;
                        Підтримка заряджання малим струмом;
                        Два порти USB-A для одночасного заряджання двох пристроїв;
                        Вхідні інтерфейси: Micro-USB, USB Type C
                        Вихідні інтерфейси: 2 x USB-A;

                        Параметри виходу
                        USB-A: 5.1V - 2.1A</p>
                </div>

            </div>
        </div>

        <div class="upsell">
            <div class="upsell__image-container">
                <img class="upsell__image"
                    src="uploads/_ttec-pb10-20-000mah-pd-20w-tasinabilir-sarj-aleti-pow-siyah.jpg">
            </div>
            <span class="upsell__discount">-400Грн</span>
            <div class="upsell__text">
                <div>
                    <h2 class="upsell__title">Павербанк Mojue TTEK PB10 20000мАг, швидка зарядка</h2>
                    <img class="upsell__rating" src="assets/thankyou-rating.png">
                    <div class="upsell__price">
                        <span class="upsell__old-price"><del>1900</del></span>
                        <span class="upsell__new-price">1500</span>грн
                    </div>
                    <p class="upsell__description">Акумулятор надвисокої ємності 20 000 мАг

                        Одночасна зарядка 2 пристроїв

                        Можна заряджати за допомогою кабелів Type-C або Micro USB

                        Підтримка швидкої зарядки PD/QC

                        Світлодіодний індикатор батареї

                        Захист за струмом для безпечного заряджання

                        Для смартфонів і не тільки</p>
                </div>

            </div>
        </div>

        <div class="upsell">
            <div class="upsell__image-container">
                <img class="upsell__image" src="uploads/_Без названия.jpeg">
            </div>
            <span class="upsell__discount">-400Грн</span>
            <div class="upsell__text">
                <div>
                    <h2 class="upsell__title">Павербанк ILNOVA 7469, 20000мАh 74Wh, бездротова зарядка, 4 кабеля</h2>
                    <img class="upsell__rating" src="assets/thankyou-rating.png">
                    <div class="upsell__price">
                        <span class="upsell__old-price"><del>2150</del></span>
                        <span class="upsell__new-price">1750</span>грн
                    </div>
                    <p class="upsell__description">Характеристики
                        Призначення: Для телефонів, планшетів
                        Тип акумулятора: Літій-полімерний;
                        Місткість акумулятора: 20000 мА * год 74Wh;
                        Максимальний струм: 2.1 А;
                        Функції заряджання: Power Delivery
                        Два порти Micro-USB та USB-C для власної зарядки;
                        Підтримка заряджання малим струмом;
                        Вхідні інтерфейси: Micro-USB, USB Type C, USB-A;
                        Вихідні інтерфейси: 2 x USB-A; Micro USB, Type-C і Lightning</p>
                </div>

            </div>
        </div>

        <div class="upsell">
            <div class="upsell__image-container">
                <img class="upsell__image" src="uploads/296880224.jpg">
            </div>
            <span class="upsell__discount">-800Грн</span>
            <div class="upsell__text">
                <div>
                    <h2 class="upsell__title">Портативна сонячна станція освітлення GS906P Solar +сонячна панель,
                        павербанк, Радіо+Bluetooth+MP3, 10А/ч</h2>
                    <img class="upsell__rating" src="assets/thankyou-rating.png">
                    <div class="upsell__price">
                        <span class="upsell__old-price"><del>3600</del></span>
                        <span class="upsell__new-price">2800</span>грн
                    </div>
                    <p class="upsell__description">Акумулятор: 5V 10А·ч

                        Сонячна панель: 6В 3,5W

                        Кількість виносних ламп: 3 шт

                        Потужність виносної лампи: 3 Вт.

                        Довжина кабелю виносних ламп: 3 м

                        Перехідники для заряджання мобільних телефонів: micro usb, type-c, lightning Радіо FM, Bluetooth

                        Слоти USB, microSD

                        Вбудоване FM-радіо з антеною

                        MP3 плеєр

                        USB

                        micro-SD

                        4 види зарядних шнурів

                        Ліхтарик та аварійна лампочка

                        Заряджання від мережі 220В та сонячної батареї

                        Час заряджання: 8-12 год</p>
                </div>

            </div>
        </div>

    </main>
    <script>
        (function () {
            var phone = null;
            for (var i = 0, upsells = document.querySelectorAll('.upsell'); i < upsells.length; i++) {
                (function (upsell) {
                    var title = upsell.querySelector('.upsell__title').innerHTML;
                    var button = upsell.querySelector('.button');
                    button.addEventListener('click', function () {
                        button.disabled = true;
                        button.innerHTML = 'Добавлено';
                        button.classList.add('button--added');
                        var xhr = new XMLHttpRequest();
                        xhr.open('POST', window.location.href);
                        xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        phone && xhr.send('phone=' + phone + '&upsell=' + encodeURIComponent(title));
                    });
                })(upsells[i]);
            }
        })();
    </>
    </script>
</body><iframe id="__JSBridgeIframe_1.0__" title="jsbridge___JSBridgeIframe_1.0__"
    style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult_1.0__"
    title="jsbridge___JSBridgeIframe_SetResult_1.0__" style="display: none;"></iframe><iframe id="__JSBridgeIframe__"
    title="jsbridge___JSBridgeIframe__" style="display: none;"></iframe><iframe id="__JSBridgeIframe_SetResult__"
    title="jsbridge___JSBridgeIframe_SetResult__" style="display: none;"></iframe>

</html>