<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            background: #f2f2f2;
            font-family: Arial, Helvetica, sans-serif;
            color: #222;
        }

        .topbar {
            background: linear-gradient(to bottom, #4d4d4d, #2f2f2f);
            color: #fff;
            height: 64px;
            display: flex;
            align-items: center;
            padding: 0 18px;
            font-size: 18px;
            font-weight: 600;
            box-shadow: inset 0 -1px 0 rgba(255,255,255,0.15);
        }

        .topbar .brand {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .topbar .brand-mark {
            width: 12px;
            height: 12px;
            background: #ef6b3d;
            border-radius: 2px;
            transform: rotate(45deg);
            display: inline-block;
        }

        .page {
            min-height: calc(100vh - 64px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px 80px;
        }

        .login-card {
            width: 100%;
            max-width: 470px;
            background: rgba(255,255,255,0.75);
            border: 1px solid #d9d9d9;
            border-radius: 12px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            padding: 30px 28px 26px;
        }

        h1 {
            text-align: center;
            font-size: 52px;
            font-weight: 400;
            margin: 0 0 22px;
            color: #2c2c2c;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 20px;
            margin-bottom: 8px;
            color: #2f2f2f;
        }

        .form-control {
            height: 52px;
            border-radius: 8px;
            border: 1px solid #d0d0d0;
            font-size: 18px;
            padding: 10px 14px;
        }

        .actions {
            display: flex;
            gap: 15px;
            margin-top: 18px;
        }

        .btn {
            flex: 1;
            height: 52px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 500;
            transition: 0.2s ease;
        }

        .btn-secondary {
            background: #f3f3f3;
            color: #2f2f2f;
            border: 1px solid #d0d0d0;
        }

        .btn-primary {
            background: #0d6efd;
            color: #fff;
        }

        .message {
            width: 100%;
            text-align: center;
            font-size: 25px;
            color: #151515;
            margin-top: -10px;
            padding-bottom: 30px;
            line-height: 1.5;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <div class="topbar">
        <div class="brand">
            <span class="brand-mark"></span>
            <span>Views</span>
        </div>
    </div>

    <div class="page">
        <div>
            <div class="login-card">
                <h1>Login</h1>

                <form action="#" method="post">
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                    </div>

                    <div class="actions">
                        <button type="button" class="btn btn-secondary">Nova conta</button>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="message">
        Se eu agora regressar aqui e colocar aqui login underscore new,<br>
        aí vou pegar por vez o mesmo formulário.
    </div>
</body>
</html>