<x-user-layout>
    {{---------------------
        $slot
    --------------------}}
    <h1>Setting Page</h1>
    <form action="{{ route('logout') }}" method="post">
        @csrf
        <input style="background:red; border:none; padding:10px; color:white; cursor:pointer;" class="logout" type="submit" value="Logout">
    </form>
    {{---------------------
        $slot
    --------------------}}
</x-user-layout>
