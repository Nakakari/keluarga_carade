<style>
    h3 {
        margin-top: 60px;
    }

    h3:first-child {
        margin-top: 0px;
    }
</style>

@foreach ($categorys as $c)
<h3 style="text-align: center; margin-bottom: 20px;">{{ $c->question_category }}</h3>
@foreach ($subCategorys as $s)
@if($c->question_category === $s->question_category)
<table style="border: 1px solid black; border-collapse: collapse; margin-bottom: 40px; width: 100%;">
    <thead>
        <tr>
            <th colspan="3" style="border: 1px solid black; text-align: center;">{{ $s->question_subcategory }}</th>
        </tr>
    </thead>
    <tbody>
        @php
        $no = 1;
        @endphp
        @foreach ($questions as $q)
        @if($s->question_category === $q->question_category && $s->question_subcategory === $q->question_subcategory)
        <tr>
            <td style="border: 1px solid black; text-align: center; width: 5%;">{{ $no++ }}</td>
            <td style="border: 1px solid black; text-align: left; width: 45%;">{{ $q->question }}</td>
            <td style="border: 1px solid black; text-align: left; width: 50%;">
                @php
                $i = 0;
                @endphp
                @foreach ($answers as $a)
                @if ($q->question_id === $a->question_id && $a->question_item_id !== NULL)
                @if ($a->question_id === $a->question_id)
                - {{ $a->question_item }}<br>
                @endif
                @endif
                @endforeach
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endif
@endforeach
@endforeach