<form acction="{{ route('save')}}" method="post">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Enter your name" required>
    <input type="text" name="lastname" placeholder="Enter your lastname" required>
    <input type="text" name="email" placeholder="Enter your email" required>
    <input type="text" name="phone" placeholder="Enter your phone" required>
    <input type="text" name="password" placeholder="Enter your phone" required>
    <button type="submit">Submit</button>
</form>
