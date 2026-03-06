<!DOCTYPE html>
<html>
<head>
    <title>Care For Rudang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #eef2ff, #f8fafc);
            padding: 40px;
        }

        .card {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 16px;
            box-shadow: 0 12px 30px rgba(0,0,0,0.08);
        }

        .logo {
            text-align: center;
            margin-bottom: 15px;
        }

        .logo img {
            height: 80px;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitle {
            text-align: center;
            color: #6b7280;
            font-size: 14px;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
            margin-top: 20px;
        }

        textarea {
            width: 100%;
        }

        button {
            background: #2563eb;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 25px;
            font-size: 15px;
            width: 100%;
            transition: 0.3s;
        }

        button:hover {
            background: #1e40af;
        }

        .success {
            background: #d1fae5;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #065f46;
        }

        .error {
            background: #fee2e2;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            color: #991b1b;
        }

        .privacy-note {
            margin-top: 15px;
            font-size: 13px;
            color: #6b7280;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="card">

    <div class="logo">
        <img src="{{ asset('logo.png') }}" alt="Care For Rudang Logo">
    </div>

    <h2>Care For Rudang</h2>

    <div class="subtitle">
        Ruang aman untuk menyampaikan aspirasi, kritik, saran, maupun curahan hati.<br>
        Jangan takut untuk berbicara — identitas Anda akan tetap <strong>dirahasiakan</strong>.<br>
        Suara Anda berarti bagi kami 🤍
    </div>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('message.store') }}" method="POST">
        @csrf

        <label>Pesan / Aspirasi</label>
        <textarea name="kritik" id="kritik"></textarea>

        <button type="submit">Kirim Aspirasi</button>

        <div class="privacy-note">
            Semua pesan akan disimpan sebagai <strong>Anonymous</strong> dan hanya digunakan untuk evaluasi internal.
        </div>
    </form>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.config.versionCheck = false;

    CKEDITOR.replace('kritik', {
        height: 180
    });
</script>

</body>
</html>