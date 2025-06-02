<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div style="background-color: white; padding: 2rem; border-radius: 0.75rem; box-shadow: 0 4px 6px rgba(0,0,0,0.1); width: 100%; max-width: 28rem; margin-left: auto; margin-right: auto; margin-top: 6rem;">
        <h2 style="font-size: 1.5rem; font-weight: 700; text-align: center; margin-bottom: 1.5rem; color: #1f2937;">Login</h2>

        <form action="/login" method="POST" style="display: flex; flex-direction: column; gap: 1rem;">
            @csrf
            <div>
                <label for="email" style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151;">Email:</label>
                <input type="email" name="email" id="email" required
                    style="margin-top: 0.25rem; width: 100%; padding: 0.5rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); outline: none;">
            </div>

            <div>
                <label for="password" style="display: block; font-size: 0.875rem; font-weight: 500; color: #374151;">Senha:</label>
                <input type="password" name="password" id="password" required
                    style="margin-top: 0.25rem; width: 100%; padding: 0.5rem 1rem; border: 1px solid #d1d5db; border-radius: 0.5rem; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1); outline: none;">
            </div>

            <button type="submit"
                style="width: 100%; background-color: #2563eb; color: white; padding: 0.5rem; border-radius: 0.5rem; border: none; cursor: pointer; transition: background-color 0.2s;">
                Entrar
            </button>
        </form>
    </div>
</body>
</html>