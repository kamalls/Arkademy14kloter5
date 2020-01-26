function biodata(nama, umur) {
    const hobbies = ["learning", "coding", "olahraga"]
    const isMarried = false
    const address = "Jl. Mawar, Lengkong, Kota. Tangerang Selatan"
    const interestInCoding = true

    //buat objek
    let about = {
        name: nama,
        age: umur,
        address: address,
        hobbies: hobbies,
        isMarried: isMarried,
        listSchool: {
            sd: [{
                    name: 'SDN 1 Katong',
                    year_in: 2003,
                    year_out: 2009,
                    major: null
                }],
            smp: [{
                    name: 'SMPN 2 Penawangan',
                    year_in: 2009,
                    year_out: 2012,
                    major: null
                }],
            sma: [{
                    name: 'SMAN 1 Toroh',
                    year_in: 2012,
                    year_out: 2015,
                    major: null
                }],
            universitas: [{
                    name: 'Universitas Islam Syekh Yusuf',
                    year_in: 2015,
                    year_out: 2019,
                    major: null
                }]
        },
        skills: {
            web: [{
                    skillName: 'Web Design using HTML, CSS, JavaScript & Web Dev using PHP/CodeIgniter',
                    level: 'advanced'
                }],
            android: [{
                    skillName: 'Java',
                    level: 'beginner'
                }]
        },
        interest_in_coding: interestInCoding
    }
    //akhir objek


    return JSON.stringify(about)
}

let hasil = biodata('Arda Budi Santoso', '22')

console.log(hasil)