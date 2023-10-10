<?php

namespace App\Exports;

use App\Models\Product;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class ProductsExport implements FromQuery, Responsable, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    use Exportable;

    private $fileName = 'Products.xlsx';

    public function query()
    {
        return Product::query()->with('category');
    }

    public function headings(): array
    {
        return ['ID', 'NO Item', 'Nama Kategori', 'Gambar'];
    }

    public function map($product): array
    {
        return [
            $product->id,
            $product->no_item,
            $product->category->nama_kategori,
            $product->image,
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $evet) {
                $evet->sheet->getStyle('A1:D1')->applyFromArray([
                    'font' => [
                        'bold' => true,
                    ],
                ]);
            },
        ];
    }
}
