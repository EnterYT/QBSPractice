@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="mt-10 pt-10 space-y-10 max-w-3xl mx-auto">
        <section>
            <p class="text-sm leading-6 text-gray-600">
                Эксперименты с Laravel по видео-урокам и с большим элементом самообучения.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-indigo-600 mb-2">Наш путь</h2>
            <p class="text-sm leading-6 text-gray-700">
                Всё началось с небольшого интереса к веб-разработке и быстро переросло в настоящее увлечение созданием функциональных и красивых сайтов.
                Мы изучаем Laravel через практику, пробуем разные подходы и строим что-то новое каждый день.
            </p>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-indigo-600 mb-2">Чему мы следуем</h2>
            <ul class="list-disc list-inside text-sm leading-6 text-gray-700 space-y-1">
                <li>Саморазвитие через практику</li>
                <li>Чистый и понятный код</li>
                <li>Постоянное улучшение навыков</li>
                <li>Открытость новым идеям</li>
            </ul>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-indigo-600 mb-2">Контакты</h2>
            <p class="text-sm leading-6 text-gray-700">
                Есть вопросы или предложения? Не стесняйтесь обращаться через <a href="{{ route('contact') }}" class="text-indigo-500 underline hover:text-indigo-700">страницу контактов</a>.
            </p>
        </section>
    </div>
@endsection
