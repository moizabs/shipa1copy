<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .state-link-a {
        transition: color 0.3s, transform 0.3s;
    }

    .state-link-a:hover {
        color: var(--tj-primary-color);
        transform: scale(1.1);
    }

    h1 {
        font-family: Arial, sans-serif;
        color: var(--tj-secondary-color);
        text-align: center;
        margin-bottom: 40px;
        animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .container-2 {
        position: relative;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        margin-top: 30px;
        background-size: cover;
        background-position: center;
    }

    .state-card {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: var(--tj-primary-color);
        color: var(--tj-white-color);
        padding: 8px;
        border-radius: 8px;
        margin-bottom: 15px;
        box-shadow: 0 4px 12px rgb(0 0 0 / 33%);
        transition: background-color 0.3s, transform 0.3s, box-shadow 0.3s;
        animation: fadeInUp 0.5s ease-out;
        position: relative;
        overflow: hidden;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .state-card:hover {
        background-color: #183c46c9;
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .state-icon {
        font-size: 1.5rem;
        margin-right: 10px;
        transition: transform 0.3s;
    }

    .state-card:hover .state-icon {
        transform: rotate(360deg);
    }

    .state-text {
        flex-grow: 1;
        font-weight: 600;
    }

    .state-link {
        display: contents;
        color: var(--tj-white-color);
        text-decoration: none;
        font-size: 1.2rem;
    }

    .state-link:hover {
        color: var(--tj-primary-color2);
    }

    .state-card::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 10px;
        height: 100%;
        background-color: var(--tj-primary-color);
        transform: translateX(-100%);
        transition: transform 0.3s;
    }

    .state-card:hover::before {
        transform: translateX(0);
    }

    @media (max-width: 576px) {
        .container-2 {
            padding: 15px;
        }

        .state-card {
            font-size: 14px;
        }

        .state-icon {
            font-size: 1.3rem;
        }
    }
</style>
<div class="container container-2">
    <h1>Car Transport to or from 49 Other States</h1>
    <div class="row">
        @foreach ($transports as $row)
            <div class="col-md-4">
                <div class="state-card">
                    <a href="{{ route('get.nation.data', $row->slug) }}" class="state-link"
                        data-slug="{{ $row->slug }}">
                        <i class="bi bi-geo-alt-fill state-icon"></i>
                        <div class="state-text">{{ $row->name }}</div>
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
