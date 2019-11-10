# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""

import requests

url = "http://loterias.caixa.gov.br/wps/portal/loterias/"

req = requests.get(url)
text = req.text.replace('\t', '')
#print(text)

#======================== MEGASENA ======================

padraoMegaSena = '<ul class="resultado-loteria mega-sena">'
indexMegaSena = text.find(padraoMegaSena)

#print('IndexMegaSena = ', indexMegaSena)
NumMegaSena = text[indexMegaSena + len(padraoMegaSena) : indexMegaSena + len(padraoMegaSena) + 6*(2+9)]
NumMegaSena = NumMegaSena.replace('<li>', '')
NumMegaSena = NumMegaSena.replace('</li>', ', ')
NumMegaSena = NumMegaSena[:-2]
NumMegaSena = NumMegaSena.split(',')
print(NumMegaSena)

padraoSenaResult = '<a href="/wps/portal/loterias/landing/megasena">'
indexSenaResult = text.find(padraoSenaResult)

SenaResult = text[indexSenaResult + len(padraoSenaResult) : indexSenaResult + len(padraoSenaResult) + 14]
SenaResult = SenaResult.replace('</a>', '')
print(SenaResult)

SenaData = text[indexSenaResult + len(padraoSenaResult) + 9 : indexSenaResult + len(padraoSenaResult) + 130]
SenaData = SenaData.replace('</a>', '')
SenaData = SenaData.replace('</h3>', '')
SenaData = SenaData.replace('<p class="description">', '')
SenaData = SenaData.replace('</p>', '')
SenaData = SenaData[SenaData.find('Concurso'):]
pos = SenaData.find('<p')
if pos != -1:
    SenaData = SenaData[0:pos-1]
print(SenaData)

#======================== QUINA ======================
padraoQuina = '<ul class="resultado-loteria quina">'
indexQuina = text.find(padraoQuina)

#print('IndexQuina = ', indexQuina)
NumQuina = text[indexQuina + len(padraoQuina) : indexQuina + len(padraoQuina) + 5*(2+9)]
NumQuina = NumQuina.replace('<li>', '')
NumQuina = NumQuina.replace('</li>', ', ')
NumQuina = NumQuina[:-2]
NumQuina = NumQuina.split(',')
print(NumQuina)

padraoQuinaResult = '<a href="/wps/portal/loterias/landing/quina">'
indexQuinaResult = text.find(padraoQuinaResult)

QuinaResult = text[indexQuinaResult + len(padraoQuinaResult) : indexQuinaResult + len(padraoQuinaResult) + 14]
QuinaResult = QuinaResult.replace('</a>', '')
print(QuinaResult)

QuinaData = text[indexQuinaResult + len(padraoQuinaResult) + 9 : indexQuinaResult + len(padraoQuinaResult) + 130]
QuinaData = QuinaData.replace('</a>', '')
QuinaData = QuinaData.replace('</h3>', '')
QuinaData = QuinaData.replace('<p class="description">', '')
QuinaData = QuinaData.replace('</p>', '')
QuinaData = QuinaData[QuinaData.find('Concurso'):]
pos = QuinaData.find('<p')
if pos != -1:
    QuinaData = QuinaData[0:pos-1]
print(QuinaData)

#======================== LOTOMANIA ======================

padraoLotomania = '<table class="simple-table lotomania">'
indexLotomania = text.find(padraoLotomania)

NumLotomania = text[indexLotomania + len(padraoLotomania) + 34: indexLotomania + len(padraoLotomania) + 34 + 20*(2+9+8) + 4*(9+6)]
NumLotomania = NumLotomania.replace('<td>', '')
NumLotomania = NumLotomania.replace('</td>', ', ')
NumLotomania = NumLotomania.replace('<tr>', '')
NumLotomania = NumLotomania.replace('</tr>', '')
NumLotomania = NumLotomania.rstrip('\r\n\r\n')
NumLotomania = NumLotomania[:-2]
NumLotomania = NumLotomania.split(',')
NumLotomania2 = []
for s in NumLotomania:
    s = s.replace('\r\n', '')
    NumLotomania2.append(s)
print(NumLotomania2)

padraoLotoResult = '<a href="/wps/portal/loterias/landing/lotomania">'
indexLotoResult = text.find(padraoLotoResult)

LotoResult = text[indexLotoResult + len(padraoLotoResult) : indexLotoResult + len(padraoLotoResult) + 14]
LotoResult = LotoResult.replace('</a>', '')
print(LotoResult)

LotoData = text[indexLotoResult + len(padraoLotoResult) + 9 : indexLotoResult + len(padraoLotoResult) + 130]
LotoData = LotoData.replace('</a>', '')
LotoData = LotoData.replace('</h3>', '')
LotoData = LotoData.replace('<p class="description">', '')
LotoData = LotoData.replace('</p>', '')
LotoData = LotoData[LotoData.find('Concurso'):]
pos = LotoData.find('<p')
if pos != -1:
    LotoData = LotoData[0:pos-1]
LotoData = LotoData.replace('\r\n', '')
print(LotoData)

#======================== LOTOFACIL ======================

padraoLotofacil = '<table class="simple-table lotofacil">'
indexLotofacil = text.find(padraoLotofacil)

NumLotofacil = text[indexLotofacil + len(padraoLotofacil) + 34: indexLotofacil + len(padraoLotofacil) + 34 + 15*(2+9+8) + 4*(9)]
NumLotofacil = NumLotofacil.replace('<td>', '')
NumLotofacil = NumLotofacil.replace('</td>', ', ')
NumLotofacil = NumLotofacil.replace('<tr>', '')
NumLotofacil = NumLotofacil.replace('</tr>', '')
NumLotofacil = NumLotofacil.rstrip('\r\n\r\n')
NumLotofacil = NumLotofacil[:-2]
NumLotofacil = NumLotofacil.split(',')
NumLotofacil2 = []
for s in NumLotofacil:
    s = s.replace('\r\n', '')
    NumLotofacil2.append(s)
print(NumLotofacil2)

padraoLotofacilResult = '<a href="/wps/portal/loterias/landing/lotofacil">'
indexLotofacilResult = text.find(padraoLotofacilResult)

LotoFResult = text[indexLotofacilResult + len(padraoLotofacilResult) : indexLotofacilResult + len(padraoLotofacilResult) + 14]
LotoFResult = LotoFResult.replace('</a>', '')
print(LotoFResult)

LotoFData = text[indexLotofacilResult + len(padraoLotofacilResult) + 9 : indexLotofacilResult + len(padraoLotofacilResult) + 130]
LotoFData = LotoFData.replace('</a>', '')
LotoFData = LotoFData.replace('</h3>', '')
LotoFData = LotoFData.replace('<p class="description">', '')
LotoFData = LotoFData.replace('</p>', '')
LotoFData = LotoFData[LotoFData.find('Concurso'):]
pos = LotoFData.find('<p')
if pos != -1:
    LotoFData = LotoFData[0:pos-1]
LotoFData = LotoFData.replace('\r\n', '')
print(LotoFData)