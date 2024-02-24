export default function MyTHead(props) {
  const leiro = Object.values(props.fejlecSzoveg);
  const fejlec = leiro[0];
  const fejlecTeljes = leiro[1];
  return (
    <thead>
      <tr>
        {fejlec.map((e, i) => {
          return <th key={i}>{e}</th>;
        })}
      </tr>
    </thead>
  );
}
