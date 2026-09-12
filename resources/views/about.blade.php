<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Me? - Alif Taran Ihsan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Padding & vertical rhythm — CSS handles the breathing room,
           Tailwind handles everything else. */
        header,
        main > section,
        footer {
            padding-block: 3.5rem;
        }

        .shell {
            padding-inline: 1.5rem;
        }

        main > section + section {
            padding-block-start: 0;
        }

        header > ul li,
        nav ol li {
            padding-block: 0.25rem;
        }

        @media (min-width: 768px) {
            header,
            main > section,
            footer {
                padding-block: 4.5rem;
            }
        }
    </style>
</head>
<body class="bg-white font-sans text-neutral-800 antialiased">

<div class="mx-auto max-w-2xl shell">

    <header class="border-b border-neutral-200">
        <h1 class="text-4xl font-bold tracking-tight text-neutral-900">About me?</h1>
        <p class="mt-3 text-lg text-neutral-500">
            I'm a student at <span class="text-neutral-800">Polytechnic Negeri Jember</span> —
            still early in the road, but walking it every day.
        </p>

        <ul class="mt-8 border border-neutral-200 text-sm">
            <li class="flex justify-between px-4">
                <span class="text-neutral-500">City</span>
                <span class="font-medium">Bondowoso</span>
            </li>
            <li class="flex justify-between border-t border-neutral-200 px-4">
                <span class="text-neutral-500">Age</span>
                <span class="font-medium">20 years old</span>
            </li>
            <li class="flex justify-between border-t border-neutral-200 px-4">
                <span class="text-neutral-500">Studies</span>
                <span class="font-medium">Politeknik Negeri Jember</span>
            </li>
            <li class="flex justify-between border-t border-neutral-200 px-4">
                <span class="text-neutral-500">Current semester</span>
                <span class="font-medium">3</span>
            </li>
        </ul>

        <h3 class="mt-10 text-xs font-semibold uppercase tracking-widest text-neutral-400">My techstack</h3>
        <nav aria-label="Tech stack">
            <ol class="mt-3 flex flex-wrap gap-2 text-sm">
                <li class="rounded-full border border-emerald-700 px-3 text-emerald-700">ExpressJS</li>
                <li class="rounded-full border border-neutral-300 px-3 text-neutral-600">Tailwind</li>
                <li class="rounded-full border border-neutral-300 px-3 text-neutral-600">MongoDB</li>
                <li class="rounded-full border border-neutral-300 px-3 text-neutral-600">MySQL</li>
                <li class="rounded-full border border-neutral-300 px-3 text-neutral-600">Vue</li>
            </ol>
        </nav>
    </header>

    <main>
        <section aria-labelledby="the-short-version">
            <h2 id="the-short-version" class="text-xl font-semibold tracking-tight text-neutral-900">The short version</h2>
            <p class="mt-4 leading-relaxed">
                I started with a text editor, a lot of curiosity, and roughly zero direction.
                Somewhere between my first <code class="bg-neutral-100 px-1.5 py-0.5 text-sm">console.log</code>
                and my first deployed (and immediately broken) app, I realized I actually enjoy the breaking part —
                reading the error, guessing, fixing, breaking again.
            </p>
            <p class="mt-4 leading-relaxed">
                Now I'm in my third semester, mostly learning backend with Laravel, Express, and databases,
                and trying to turn "it works on my machine" into "it works."
            </p>
        </section>

        <section aria-labelledby="currently">
            <h2 id="currently" class="text-xl font-semibold tracking-tight text-neutral-900">Currently</h2>
            <ul class="mt-4 space-y-3 text-sm">
                <li class="flex gap-3">
                    <span aria-hidden="true" class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-700"></span>
                    <span>Learning <strong>Laravel & Blade</strong> — this very page is part of that.</span>
                </li>
                <li class="flex gap-3">
                    <span aria-hidden="true" class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-700"></span>
                    <span>Building small projects instead of watching tenth tutorial of the month.</span>
                </li>
                <li class="flex gap-3">
                    <span aria-hidden="true" class="mt-1.5 h-1.5 w-1.5 shrink-0 rounded-full bg-emerald-700"></span>
                    <span>Getting comfortable with <strong>MySQL &amp; MongoDB</strong> on real data.</span>
                </li>
            </ul>
        </section>

        <section aria-labelledby="beliefs">
            <h2 id="beliefs" class="text-xl font-semibold tracking-tight text-neutral-900">Things I believe (for now)</h2>
            <blockquote class="mt-4 border-l-2 border-emerald-700 pl-5 italic text-neutral-600">
                <p>
                    Simple beats clever. A boring solution that ships is worth more than
                    an elegant one that lives in a draft folder.
                </p>
            </blockquote>
            <p class="mt-4 leading-relaxed">
                Also: good spacing is half of good design — which is why this page has more
                padding than personality.
            </p>
        </section>
    </main>

    <footer class="border-t border-neutral-200">
        <h2 class="text-xs font-semibold uppercase tracking-widest text-neutral-400">Find me elsewhere</h2>
        <address class="mt-4 not-italic">
            <ul class="flex flex-wrap gap-x-8 gap-y-3 text-sm">
                <li>
                    <a href="https://github.com/IchanZX1" class="inline-flex items-center gap-2 text-neutral-600 hover:text-emerald-700">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path d="M12 .5C5.65.5.5 5.65.5 12c0 5.1 3.29 9.42 7.86 10.95.58.1.79-.25.79-.55v-2.1c-3.2.7-3.87-1.36-3.87-1.36-.53-1.33-1.28-1.69-1.28-1.69-1.05-.71.08-.7.08-.7 1.16.08 1.77 1.19 1.77 1.19 1.03 1.76 2.7 1.25 3.36.96.1-.75.4-1.26.73-1.55-2.55-.29-5.23-1.28-5.23-5.68 0-1.26.45-2.28 1.19-3.09-.12-.29-.52-1.46.11-3.05 0 0 .97-.31 3.18 1.18a11.1 11.1 0 0 1 5.79 0c2.2-1.49 3.17-1.18 3.17-1.18.63 1.59.23 2.76.12 3.05.74.81 1.18 1.83 1.18 3.09 0 4.41-2.68 5.38-5.24 5.67.41.35.78 1.05.78 2.12v3.14c0 .3.2.66.8.55A11.51 11.51 0 0 0 23.5 12C23.5 5.65 18.35.5 12 .5Z"/>
                        </svg>
                        GitHub
                    </a>
                </li>
                <li>
                    {{-- TODO: ganti dengan nomor WA kamu (format: 62xxxxxxxxxxx) --}}
                    <a href="https://wa.me/628xxxxxxxxxx" class="inline-flex items-center gap-2 text-neutral-600 hover:text-emerald-700">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91c0 1.75.46 3.45 1.32 4.95L2 22l5.25-1.38a9.87 9.87 0 0 0 4.79 1.22h.01c5.46 0 9.9-4.45 9.9-9.91 0-2.65-1.03-5.14-2.9-7.01A9.82 9.82 0 0 0 12.04 2Zm0 1.67c2.2 0 4.27.86 5.83 2.42a8.18 8.18 0 0 1 2.41 5.84c0 4.54-3.7 8.23-8.25 8.23a8.2 8.2 0 0 1-4.1-1.09l-.3-.18-3.12.82.83-3.04-.19-.31a8.19 8.19 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24ZM8.53 7.33c-.16 0-.43.06-.66.31-.22.25-.87.85-.87 2.07 0 1.22.89 2.4 1 2.56.14.19 1.72 2.65 4.22 3.61.59.23 1.05.37 1.41.48.59.19 1.13.16 1.56.1.47-.07 1.46-.6 1.67-1.18.21-.58.21-1.07.15-1.18-.06-.1-.23-.16-.48-.27-.25-.14-1.47-.72-1.69-.8-.23-.08-.37-.12-.56.12-.16.25-.64.8-.78.97-.14.14-.29.17-.53.06-.25-.14-1.04-.38-1.99-1.22-.74-.66-1.23-1.47-1.38-1.72-.12-.24-.01-.39.11-.5.11-.14.25-.29.37-.43.14-.12.19-.21.29-.35.1-.14.06-.27 0-.41-.06-.12-.55-1.35-.76-1.84-.2-.5-.4-.42-.55-.43z"/>
                        </svg>
                        WhatsApp
                    </a>
                </li>
                <li>
                    {{-- TODO: ganti dengan username Instagram kamu --}}
                    <a href="https://instagram.com/username_ig" class="inline-flex items-center gap-2 text-neutral-600 hover:text-emerald-700">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path d="M12 2.16c3.2 0 3.58.01 4.85.07 1.17.05 1.8.25 2.23.41.56.22.96.48 1.38.9.42.42.68.82.9 1.38.16.42.36 1.06.41 2.23.06 1.27.07 1.65.07 4.85s-.01 3.58-.07 4.85c-.05 1.17-.25 1.8-.41 2.23-.22.56-.48.96-.9 1.38-.42.42-.82.68-1.38.9-.42.16-1.06.36-2.23.41-1.27.06-1.65.07-4.85.07s-3.58-.01-4.85-.07c-1.17-.05-1.8-.25-2.23-.41a3.72 3.72 0 0 1-1.38-.9 3.72 3.72 0 0 1-.9-1.38c-.16-.42-.36-1.06-.41-2.23C2.17 15.58 2.16 15.2 2.16 12s.01-3.58.07-4.85c.05-1.17.25-1.8.41-2.23.22-.56.48-.96.9-1.38.42-.42.82-.68 1.38-.9.42-.16 1.06-.36 2.23-.41C8.42 2.17 8.8 2.16 12 2.16Zm0 3.68A6.16 6.16 0 1 0 18.16 12 6.16 6.16 0 0 0 12 5.84Zm0 10.16A4 4 0 1 1 16 12a4 4 0 0 1-4 4Zm7.85-10.4a1.44 1.44 0 1 1-1.44-1.44 1.44 1.44 0 0 1 1.44 1.44Z"/>
                        </svg>
                        Instagram
                    </a>
                </li>
                <li>
                    {{-- TODO: ganti dengan username LinkedIn kamu --}}
                    <a href="https://linkedin.com/in/username-li" class="inline-flex items-center gap-2 text-neutral-600 hover:text-emerald-700">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                            <path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.46v6.28ZM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12ZM7.12 20.45H3.56V9h3.56v11.45ZM22.22 0H1.77C.79 0 0 .77 0 1.72v20.55C0 23.23.79 24 1.77 24h20.45c.98 0 1.78-.77 1.78-1.73V1.72C24 .77 23.2 0 22.22 0Z"/>
                        </svg>
                        LinkedIn
                    </a>
                </li>
            </ul>
        </address>
        <p class="mt-8 text-xs text-neutral-400">
            Built while learning Laravel — hand-coded, no template.
        </p>
    </footer>

</div>

</body>
</html>
