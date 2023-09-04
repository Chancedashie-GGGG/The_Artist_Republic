export default function Home() {
  return (
    <main className="h-full flex justify-center">
      <div className="bg-zinc-950 w-full lg:w-10/12 ">
        <div className="flex justify-center"><img src="./images/betatag.png" className="w-1/2 p-2"/></div>
        <div className="font-semibold text-xl p-3 w-full">Newest Art</div>
        <div className="font-semibold text-xl p-3 w-full">Newest Animations</div>
        <div className="font-semibold text-xl p-3 w-full">Staff Picks</div>
      </div>
    </main>
  )
}
