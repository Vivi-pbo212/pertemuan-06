# Lab Sheet Pertemuan 6: Abstraction dan Polymorphism

- **Nama:** Novy Astoty
- **NIM:** 24.24.032569
- **Program Studi:** Pendidikan Teknologi Informasi
- **Fakultas:** Fakultas Bahasa Ilmu Pengetahuan dan Teknologi
- **Universitas:** Universitas Muhammadiyah Palangkaraya

## Kapan Memilih `abstract class` dan Kapan Memilih `interface`?

1. **Pilih `abstract class`** ketika kelas-kelas turunan memiliki hubungan *is-a* yang erat serta berbagi properti, *constructor*, atau implementasi *method* bawaan yang sama (seperti `BangunDatar` yang menjadi induk bagi `Lingkaran`, `Persegi`, `PersegiPanjang`, dan `Segitiga` dengan kontrak `luas()` dan `keliling()`).
2. **Pilih `interface`** ketika kita ingin menetapkan kontrak perilaku (*can-do*) yang dapat diterapkan oleh berbagai kelas dari hierarki yang berbeda, serta mendukung implementasi banyak *interface* sekaligus pada satu kelas (seperti `Notifikasi` dengan method `kirim(string $pesan): string` yang diimplementasikan oleh `Email`, `WhatsApp`, dan `SMS`).
