{{-- <div>
    <h2>Latest Crypto Market Trends</h2>
    <table>
        <thead>
            <tr>
                <th>Coin</th>
                <th>Symbol</th>
                <th>Price (USD)</th>
                <th>24h Change</th>
                <th>Market Cap</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $coin)
                <tr>
                    <td>
                        <img src="{{ $coin['image'] }}" alt="{{ $coin['name'] }}" width="20">
                        {{ $coin['name'] }}
                    </td>
                    <td>{{ strtoupper($coin['symbol']) }}</td>
                    <td>${{ number_format($coin['current_price'], 2) }}</td>
                    <td style="color: {{ $coin['price_change_percentage_24h'] >= 0 ? 'green' : 'red' }}">
                        {{ number_format($coin['price_change_percentage_24h'], 2) }}%
                    </td>
                    <td>${{ number_format($coin['market_cap'], 0, '.', ',') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}