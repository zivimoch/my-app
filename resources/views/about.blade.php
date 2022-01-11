<x-app-layout>
    @slot('style')
    <style>
        body {
            background-color: indigo;
        }

    </style>
    @endslot

    ini Halaman About. Hallo {{$name ?? 'Anonimus'}}

    <form action="/about" method="POST">
        @csrf
        <input type="submit" name="submit" value="submit">
    </form>
</x-app-layout>
