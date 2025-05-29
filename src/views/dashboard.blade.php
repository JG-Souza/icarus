<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <div style="max-width: 1200px; margin-left: auto; margin-right: auto; padding-left: 1rem; padding-right: 1rem; margin-top: 3rem;">
        <h1 style="font-size: 1.875rem; font-weight: 700; color: #111827; margin-bottom: 1.5rem;">Dashboard</h1>

        <div style="display: grid; grid-template-columns: 1fr; gap: 1.5rem; margin-bottom: 2.5rem;">
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Usuários</h2>
                <p style="color: #374151; font-size: 1.875rem;">150</p>
            </div>
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Pedidos</h2>
                <p style="color: #374151; font-size: 1.875rem;">75</p>
            </div>
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Receita</h2>
                <p style="color: #374151; font-size: 1.875rem;">R$ 12.000</p>
            </div>
        </div>

        <div style="margin-top: 2.5rem; background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
            <h2 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 1rem;">Últimas Atividades</h2>
            <ul style="border-top: 1px solid #e5e7eb; list-style: none; padding-left: 0;">
                <li style="padding-top: 0.5rem; padding-bottom: 0.5rem;">Usuário João fez login</li>
                <li style="padding-top: 0.5rem; padding-bottom: 0.5rem; border-top: 1px solid #e5e7eb;">Pedido #1234 foi criado</li>
                <li style="padding-top: 0.5rem; padding-bottom: 0.5rem; border-top: 1px solid #e5e7eb;">Pagamento recebido para pedido #1233</li>
            </ul>
        </div>

        <form action="/logout" method="POST" style="margin-top: 1rem;">
            <button type="submit" style="padding: 0.5rem 1rem; background-color: #ef4444; color: white; border-radius: 0.25rem; border: none; cursor: pointer;">Logout</button>
        </form>
    </div>
</body>
</html>