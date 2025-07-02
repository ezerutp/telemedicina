<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Diagnostico;

class DiagnosticoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Diagnostico::insert([
            [
                'nombre' => 'Gripe',
                'codigo_cie10' => 'J10',
                'descripcion' => 'Infección viral aguda del tracto respiratorio superior.',
            ],
            [
                'nombre' => 'Diabetes tipo 2',
                'codigo_cie10' => 'E11',
                'descripcion' => 'Trastorno metabólico caracterizado por hiperglucemia crónica.',
            ],
            [
                'nombre' => 'Hipertensión arterial',
                'codigo_cie10' => 'I10',
                'descripcion' => 'Enfermedad crónica caracterizada por presión arterial elevada.',
            ],
            [
                'nombre' => 'Asma bronquial',
                'codigo_cie10' => 'J45',
                'descripcion' => 'Enfermedad inflamatoria crónica de las vías respiratorias.',
            ],
            [
                'nombre' => 'Neumonía',
                'codigo_cie10' => 'J18',
                'descripcion' => 'Infección aguda del parénquima pulmonar.',
            ],
            [
                'nombre' => 'Migraña',
                'codigo_cie10' => 'G43',
                'descripcion' => 'Trastorno neurológico caracterizado por cefaleas recurrentes.',
            ],
            [
                'nombre' => 'Anemia ferropénica',
                'codigo_cie10' => 'D50',
                'descripcion' => 'Disminución de glóbulos rojos por deficiencia de hierro.',
            ],
            [
                'nombre' => 'Gastritis aguda',
                'codigo_cie10' => 'K29',
                'descripcion' => 'Inflamación súbita de la mucosa gástrica.',
            ],
            [
                'nombre' => 'Apendicitis aguda',
                'codigo_cie10' => 'K35',
                'descripcion' => 'Inflamación aguda del apéndice vermiforme.',
            ],
            [
                'nombre' => 'Insuficiencia renal crónica',
                'codigo_cie10' => 'N18',
                'descripcion' => 'Pérdida progresiva e irreversible de la función renal.',
            ],
            [
                'nombre' => 'Otitis media aguda',
                'codigo_cie10' => 'H66',
                'descripcion' => 'Inflamación aguda del oído medio.',
            ],
            [
                'nombre' => 'Dermatitis atópica',
                'codigo_cie10' => 'L20',
                'descripcion' => 'Enfermedad inflamatoria crónica de la piel.',
            ],
            [
                'nombre' => 'Colelitiasis',
                'codigo_cie10' => 'K80',
                'descripcion' => 'Presencia de cálculos en la vesícula biliar.',
            ],
            [
                'nombre' => 'Artritis reumatoide',
                'codigo_cie10' => 'M06',
                'descripcion' => 'Enfermedad autoinmune que afecta las articulaciones.',
            ],
            [
                'nombre' => 'Epilepsia',
                'codigo_cie10' => 'G40',
                'descripcion' => 'Trastorno neurológico caracterizado por convulsiones recurrentes.',
            ],
            [
                'nombre' => 'Obesidad',
                'codigo_cie10' => 'E66',
                'descripcion' => 'Acumulación excesiva de grasa corporal.',
            ],
            [
                'nombre' => 'Depresión mayor',
                'codigo_cie10' => 'F32',
                'descripcion' => 'Trastorno del estado de ánimo con síntomas depresivos persistentes.',
            ],
            [
                'nombre' => 'Cistitis aguda',
                'codigo_cie10' => 'N30',
                'descripcion' => 'Inflamación aguda de la vejiga urinaria.',
            ],
            [
                'nombre' => 'Varicela',
                'codigo_cie10' => 'B01',
                'descripcion' => 'Infección viral aguda caracterizada por erupción cutánea vesicular.',
            ],
        ]);
    }
}
