
//     /Comunidade
//     /Suporte (não técnico)
//     Próximas atualizações

// Resolução do exercício 2

//     Início
//     Introdução ao NodeJS

// Código da resolução:

const os = require("node:os")
const fs = require("node:fs")
const path = require("node:path")

const systemPlatformMap = {
  "win32": "Windows",
  "linux": "Linux",
  "darwin": "MacOS",
  "freebsd": "FreeBSD"
}

function getSystemInfo() {
  const system = systemPlatformMap[os.platform()]
  const arch = os.arch()
  const cpu = os.cpus()[0].model

  const uptimeDays = Math.floor(os.uptime() / 60 / 60 / 24)
  const uptimeDaysInSeconds = uptimeDays * 24 * 60 * 60

  const uptimeHours = Math.floor((os.uptime() - uptimeDaysInSeconds) / 60 / 60)
  const uptimeHoursInSeconds = uptimeHours * 60 * 60

  const uptimeMins = Math.floor((os.uptime() - uptimeDaysInSeconds - uptimeHoursInSeconds) / 60)
  const uptimeMinsInSeconds = uptimeMins * 60

  const uptimeSecs = Math.floor(os.uptime() - uptimeDaysInSeconds - uptimeHoursInSeconds - uptimeMinsInSeconds)

  const uptime = `${uptimeDays}:${uptimeHours}:${uptimeMins}:${uptimeSecs}`

  const ramTotal = os.totalmem() / 1024 / 1024 / 1024
  const ramUsage = (os.totalmem() - os.freemem()) / 1024 / 1024 / 1024
  const ramUsagePercent = Math.round((ramUsage / ramTotal) * 100)

  return { system, arch, cpu, uptime, ramUsage, ramTotal, ramUsagePercent }
}

function printLog({ system, arch, cpu, uptime, ramUsage, ramTotal, ramUsagePercent }) {
  console.clear()
  console.log("DETALHES DO SISTEMA")
  console.log(`Sistema Operacional: ${system}`)
  console.log(`Arquitetura: ${arch}`)
  console.log(`Modelo do Processador: ${cpu}`)
  console.log(`Tempo de Atividade do Sistema: ${uptime}`)
  console.log(`Uso de Memória RAM: ${ramUsage.toFixed(2)} GB / ${ramTotal.toFixed(2)} GB (${ramUsagePercent} %)`)
}

function saveLog({ system, arch, cpu, uptime, ramUsage, ramTotal, ramUsagePercent }) {
  const logContent = `DETALHES DO SISTEMA | Sistema Operacional: ${system} | Arquitetura: ${arch} | Modelo do Processador: ${cpu} | Tempo de Atividade do Sistema: ${uptime} | Uso de Memória RAM: ${ramUsage.toFixed(2)} GB / ${ramTotal.toFixed(2)} GB (${ramUsagePercent} %)\n---\n`

  const logDir = path.join("/", "log")
  
  if (!fs.existsSync(logDir)) {
    fs.mkdirSync(logDir)
  }

  const logFilePath = path.join(logDir, "log.txt")
  fs.appendFileSync(logFilePath, logContent)
}

setInterval(() => {
  const systemInfo = getSystemInfo()
  printLog(systemInfo)
  saveLog(systemInfo)
}, 100)

// Meu Progresso - 60.0%
// 12 de 20 aulas
// Introdução ao Módulo
// O que é o Node.js
// Entendendo o event loop
// Preparando o ambiente de desenvolvimento
// Executando código JS no terminal
// Trabalhando com módulos no Node.js
// Manipulação de arquivos com o módulo “fs”
// Exercício 1
// Resolução do exercício 1
// Lidando com caminhos usando o módulo “path”
// Trabalhando com informações do SO
// Exercício 2 - Monitor de sistema
// Resolução do exercício 2
// Entendendo o que são streams e buffers
// Criando interações no terminal
// Utilizando argumentos de linha de comando
// Projeto prático: HTML Tag Escaper
// Exercício 3
// Resolução do exercício 3
// Encerramento
// Aplicações Web com NodeJs (atualização- Dominando o NodeJS)
// Copyright © 2024 - Onebitcode. Todos os direitos reservados.
// Termos de Uso - Onebitcode
// Termos de Uso
// Política de Privacidade
