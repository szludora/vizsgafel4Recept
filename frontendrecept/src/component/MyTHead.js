export default function MyTHead(props) {

  return (
    <thead>
      <tr>
        {
          props.fejlec.map((e, i) => {
          return <th key={i}>{e}</th>;
        })}
      </tr>
    </thead>
  );
}
